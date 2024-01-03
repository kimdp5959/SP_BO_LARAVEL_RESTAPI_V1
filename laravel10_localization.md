### 커밋하기 순서

> 언어 지역화 설정 처리
```text
1)
생성: 언어 지역화 구성 및 설정

* 명령어를 통한 원본 파일들 생성
* 명령어 순서대로 실행
composer require laravel-lang/common --dev

php artisan lang:add ko

php artisan lang:update
2)
변경: 언어 지역화 구성 및 설정

* config/app.php파일에서 지역화 해당 설정 값을 변경
3) 
추가: 언어 지역화 구성 및 설정

* 사용자 지정 공통 언어 파일(lang/ko/custom.php) 추가
4) 
변경: 언어 지역화 구성 및 설정

* 컨트롤단에서 언어 지역화 사용 하도록 소스 변경
5)
문서: 언어 지역화 구성 및 설정 참조문서 파일 추가

* 언어 지역화 참조문서 정리
```

### 사용자 지정 공통 언어 파일 예시
```php
<?php

declare(strict_types=1);

return [
    // 공통 메세지 관련
    'cm_have_data_success' => ':title 데이터 조회에 성공하었습니다.',
    'cm_have_no_data_error'   => ':title 데이터가 존재하지 않습니다.',
    // 공통 CRUD 관련
    'cm_create_success' => ':title 생성이 정상 처리되었습니다.',
    'cm_update_success' => ':title 정보를 수정하였습니다.',
    'cm_put_success' => ':title 정보를 수정하였습니다.',
    'cm_delete_success' => ':title 삭제를 처리하였습니다.',
    'cm_create_error' => ':title 생성에 실패했습니다.',
    'cm_update_error' => ':title 정보 수정에 실패했습니다.',
    'cm_put_error' => ':title 정보 수정에 실패했습니다.',
    'cm_delete_error' => ':title 삭제 처리에 실패했습니다.',
    'cm_search_error' => ':title 검색에 실패했습니다.',
    'cm_deleteall_error' => ':title 전체 삭제에 실패했습니다.',
    'cm_exist_success' => '존재하는 :title 입니다.',
    'cm_exist_error' => '존재하지 않는 :title입니다.',
];
```
