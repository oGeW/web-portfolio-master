<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProjectFormController extends Controller
{
    public function projectForm() {
        return view('projectForm');
    }

    public function projectStore(Request $request) {
        $checklist=$request->input('lists');
        $title=$request->projectTitle;
        $peole=$request->people;
        $outline=$request->outline;
        $expectation=$request->expectation;
        dd($checklist);

        // checklist에서 값들을 하나씩 가져와서 
        // check_list 테이블ㄹ에 listname, content(내용) 저장
        // project 먼저 생성해두고 project_id를 외래키로 참조해서 저장
        // ㄴ> 이거 하려면 먼저 projects 테이블에 project 생성 해놓고 checklist 저장
        // project_name, outline, expectation 먼저 저장
        // project 테이블에 user_id 외래키로 가져와서 프로젝트 생성자의 user_id 외래키로 참조해서 저장

        
    }
}
