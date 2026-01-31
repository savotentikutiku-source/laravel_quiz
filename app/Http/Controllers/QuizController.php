<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Quiz;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class QuizController extends Controller
{
    
    public function show()
    {
        //データ取得
        $quizzes = \App\Models\Quiz::get();
        return view('question.quiz3', compact('quizzes'));
    }

    public function quiz4_show()
    {
        //
        $fruits = "orange";
        return view('question.quiz4', compact('fruits'));
    }

    public function login(Request $request)
    {
        //セッションの削除
        $request->session()->flush();
        //ログインユーザーの設定
        $user_info = array(
            'email' => 'tech@test',
            'password' => '123',
        );

        //ログインチェック
        if (Auth::attempt($user_info)) {
            //ログイン成功
            return view('question.quiz5');
        }

        //ログイン失敗
        return view('question.quiz5');
        
    }
    public function quiz6_show()
    {
        //
        $quizzes =\App\Models\Quiz::get();
        return view('question.quiz6', compact('quizzes'));
        
    }

    public function quiz7_show()
    {
        //
        return view('question.quiz7');
        //$quizzes =\App\Models\Quiz::get();
        //return view('question.quiz7', compact('quizzes'));
    }

    public function quiz8_redirect()
    {
        //
        return redirect('quiz7');
    }

    public function quiz9_show($id)
    {
        $quiz =Quiz::find($id);
        return view('question.quiz9', compact('quiz'));

    }

    public function quiz10_show()
    {
        //
        return view('question.quiz10');
    }

    public function quiz10_store(Request $request)
    {
        // バリデーション
        $request->validate([
            'name' => 'required|string|max:30',
            'type' => 'required',
        ]);
        // データを取得
        $name = $request->input('name');
        $type = $request->input('type');

        // データを保存
        Quiz::create([
            'name' => $name,
            'type' => $type,
        ]);

        // 保存後、クイズ一覧画面にリダイレクト
        return redirect('quiz10');
    }

    public function quiz11_show_all()
    {
        //
        $sales = \App\Models\Sale::all();
        $companies = \App\Models\Company::all();
        return view('question.quiz11', compact('sales', 'companies'));
    }

    public function quiz11_show_get()
    {
        //
        $sales = \App\Models\Sale::where('company_id', '=', 2)
                                    ->orwhere('sales', '>', 8000)
                                    ->orderby('sales', 'desc')
                                    ->get();
        $companies = \App\Models\Company::where('founding_date', 'like', '%3%')
                                        ->where('address', 'like', '%テスト２%')
                                        ->get();
        return view('question.quiz11', compact('sales', 'companies'));
    }

    

    public function quiz12_show($id)
    {
        $quiz = Quiz::findorfail($id);
        return view('question.quiz12', compact('quiz'));
    }

    public function quiz12_update(Request $request, $id)
    {
        // バリデーション
        $request->validate([
            'name' => 'required|string|max:30',
            'type' => 'required',
        ]);
        // データを取得
        $name = $request->input('name');
        $type = $request->input('type');

        // データを更新
        $quiz = Quiz::findorfail($id);
        $quiz->name = $name;
        $quiz->type = $type;
        $quiz->save();

        // 更新後、クイズ一覧画面にリダイレクト
        return redirect('quiz3');
    }

    public function quiz12_delete($id)
    {
        // データを削除
        $quiz = Quiz::findorfail($id);
        $quiz->delete();

        // 削除後、クイズ一覧画面にリダイレクト
        return redirect('quiz3');
    }
}