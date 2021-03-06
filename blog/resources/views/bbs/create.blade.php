<x-app-layout>
    <x-slot name="header">
        <div class="flex justify-between">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('글쓰기 폼') }}
            </h2>
            <button onclick=location.href="{{ route('posts.index') }}" type="button" class="btn btn-info font-bold hover:bg-blue-700 text-white">
                목록보기
            </button>
        </div>
    </x-slot>
    <div class="m-4 p-4">
        <form class="row g-3" action="{{ route('posts.store') }}"method="post" enctype="multipart/form-data">
            @csrf
            <div class="col-12 m-2">
                <label for="title" class="form-label">제목</label>
                <input type="text" name="title" class="form-control" id="title" placeholder="제목을 입력하세요." value="{{ old('title') }}">
                @error('title')
                <div class="text-red-800">
                    <span>{{ $message }}</span>
                </div>
                @enderror
            </div>
            <div class="col-12">
                <label for="inputAddress2" class="form-label">글 내용</label>
                <textarea class="form-control" name="content" id="content" rows="3" >{{ old('content') }}</textarea>
                @error('content')
                <div class="text-red-800">
                    <span>{{ $message }}</span>
                </div>
                @enderror
            </div>
            <div class="col-12">
                <label for="image" class="form-label">첨부 이미지</label>
                <input type="file" name="image" class="form-control" id="image">
            </div>
            <div class="col-12">
                <button type="submit" class="btn btn-primary">글 저장</button>
            </div>
        </form>
    </div>
</x-app-layout>