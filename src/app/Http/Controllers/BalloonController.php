<?php

namespace App\Http\Controllers;

use App\Balloons;
use App\Enums\BalloonType;
use App\Messages;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class BalloonController extends Controller
{
    public function create(Request $request)
    {
        $message = Messages::findOrFail($request->messageId);
        $messageId = $message->id;

        if ($request->method() === 'POST') {
            $this->store($request);
            return redirect("/message/{$messageId}");
        }

        $type = $request->type;
        switch ($type) {
            case 'text':
                $view = $this->text();
                break;
            case 'image':
                $view = $this->image();
                break;
            default:
                return $this->fail($messageId);
        }

        return $view->with('message', $message);
    }

    public function edit($messageId, $balloonId)
    {
        $message = Messages::findOrFail($messageId);
        $balloon = $message->balloons->find($balloonId);
        Log::info('balloon edit', ['balloon' => $balloon]);

        switch ($balloon->type) {
            case BalloonType::Text:
                $view = $this->text($balloon);
                break;
            case BalloonType::Image:
                $view = $this->image($balloon);
                break;
            default:
                return $this->fail($messageId);
        }

        return $view->with('message', $message);
    }

    public function update(Request $request)
    {
        $messageId = $request->messageId;
        $this->store($request);
        return redirect("/message/{$messageId}");
    }

    public function delete($messageId, $balloonId)
    {
        $balloon = Balloons::findOrFail($balloonId);
        $balloon->delete();

        return redirect("/message/{$messageId}");
    }

    public function store(Request $request)
    {
        $messageId = $request->messageId;
        $type = $request->type;
        if (isset($request->balloonId)) {
            Log::info('balloonId found. update mode.');
            $balloon = Balloons::find($request->balloonId);
        } else {
            Log::info('balloonId not found. new mode.');
            $balloon = new Balloons();
        }

        switch ($type) {
        case 'text':
            $text = $request->text;
            
            $balloon->messages_id = $messageId;
            $balloon->type = BalloonType::Text;
            $balloon->text = $text;
            $balloon->save();
            break;
        default:
            break;
        }
    }

    public function text(Balloons $balloon = null)
    {
        Log::info('view balloon/text template');
        return view('balloon/text', is_null($balloon) ? ['type' => 'new'] : compact('balloon'), ['type' => 'update']);
    }

    public function image(Balloons $balloon = null)
    {
        return view('balloon/image', is_null($balloon) ? ['type' => 'new'] : compact('balloon'), ['type' => 'update']);
    }

    public function fail($messageId)
    {
        return redirect("message/{$messageId}");
    }
}
