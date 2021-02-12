<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FavoritesController extends Controller
{
    /**
     * 投稿をお気に入りするアクション。
     *
     * @param  $id  相手ユーザのid
     * @return \Illuminate\Http\Response
     */
     public function store($micropost){
         //認証済みユーザ（閲覧者）が、idのユーザをフォローする
         \Auth::user()->favorite($micropost);
         //前のURLへリダイレクトさせる
         return back();
     }
     
     /**
     * お気に入りをアンフォローするアクション。
     *
     * @param  $id  相手ユーザのid
     * @return \Illuminate\Http\Response
     */
     public function destroy($id){
         //認証済みユーザ（閲覧者）が、idのユーザをアンフォローする
         \Auth::user()->unfavorite($id);
         //前のURLへリダイレクトさせる
         return back();
     }
}
