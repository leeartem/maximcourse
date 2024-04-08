<x-admin-layout>
    <form method="post" action="{{ route('courses.create-submit') }}">
        @csrf
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Title</label>
            <input value="{{ old('title') }}" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="title">
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Description</label>
            <textarea  class="form-control"  name="description"></textarea>
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Price RUB</label>
            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="prices[rub]">
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Price USD</label>
            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="prices[usd]">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</x-admin-layout>
