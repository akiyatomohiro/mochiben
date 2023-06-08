<?php

namespace App\Http\Controllers;

use App\Http\Requests\MemoPostRequest;
use App\Http\Resources\MemoResource;
use App\Models\Memo;
use Exception;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Resources\Json\AnonymousResourceCollection;
use Illuminate\Support\Facades\Auth;

class MemoController extends Controller
{
    /**
     * メモの全件取得
     * @return AnonymousResourceCollection
     */
    public function fetch(): AnonymousResourceCollection
    {
        // ログインユーザーのID取得
        // $id = Auth::id();
        $id = 1;
        // if (!$id) {
        //     throw new Exception('未ログインです。');
        // }

        try {
            $memos = Memo::where('user_id', $id)->get();
        } catch (Exception $e) {
            throw $e;
        }

        return MemoResource::collection($memos);
    }

    /**
     * メモの登録
     * @param MemoPostRequest $request
     * @return JsonResponse
     */
    // public function create(MemoPostRequest $request): JsonResponse
    // {
    //     // 処理
    // }
}
