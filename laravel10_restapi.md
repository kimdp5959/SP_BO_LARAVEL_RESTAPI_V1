## Git 설정 및 프로젝트 생성하기
- 단순 테스트용
    - 저장소 이름: SP_BO_LARAVEL_240102
    - 설명: Laravel v10.39.0 (PHP v8.2.4)을 이용한 Restful API 샘플용
    - composer create-project laravel/laravel SP_BO_LARAVEL_240102

- 최종 확인용
    - 저장소 이름: SP_BO_LARAVEL_RESTAPI_V1
    - 설명: Laravel v10.39.0 (PHP v8.2.4)을 이용한 Restful API 샘플용
    - composer create-project laravel/laravel SP_BO_LARAVEL_RESTAPI_V1

## 필수 처리 할 내용

- 응답 메세지 지역화 해서 처리
- 링크 폴더 설정
- V1형태로 변경 처리
- 언어 설정 처리

## 데이터베이스명

```text
db_laravel10_restapi
```

## 사용한 artisan 명령어 정리

```bash
# 링크 폴더 설정
php artisan storage:link

# API 리소스 파일 생성
php artisan make:resource PostResource

# 모델 생성 & 마이그레이션 파일 생성
php artisan make:model Post -m

# 컨트롤러 생성
php artisan make:controller Api/PostController

# 라우터 경로 확인
php artisan route:list

# 마이그레이션 프로세스 실행
php artisan migrate
```

### 커밋하기 순서

> Laravel 10 설치

```text
설치: Laravel10 설치

* laravel10 설치 최초 상태
```

> API 리소스 생성
```text
1)
생성: API 리소스

* 원본파일생성
2)
변경: API 리소스

* 소스변경
```

> 모델 생성 및 마이그레이션
```text
1)
생성: 모델 생성 및 마이그레이션

* 원본파일생성
2)
변경: 모델 생성 및 마이그레이션

* 소스변경
3)
추가: 모델 생성 및 마이그레이션

* image필드 Eloquent Accessor 추가
```

> 컨트롤러 처리
```text
1)
생성: 컨트롤러 처리

* 원본파일생성
2)
변경: 컨트롤러 수정 & API경로 추가

* 소스변경
* API 경로 추가
```

> 데이터베이스에 데이터 등록
```text
추가: 데이터 등록

* 등록 메소스(store) 추가
```

> 데이터베이스에 데이터 조회
```text
추가: 데이터 조회

* 조회 메소스(show) 추가
```

> 데이터베이스에 데이터 수정
```text
추가: 데이터 수정

* 수정 메소스(update) 추가
```

> 데이터베이스에 데이터 삭제
```text
추가: 데이터 삭제

* 삭제 메소스(destroy) 추가
```

> 버전 형태로 관리
```text
변경: 버전 형태로 관리

* 버전 형태로 관리 되도록 소스 변경
```

> 문서&설정 파일 추가
```text
문서: Restful API 참조문서 및 설정 파일 추가

* Restful API 참조문서 정리
* Prettier - Code formatter 마크다운 파일은 설정 해제 적용
```
