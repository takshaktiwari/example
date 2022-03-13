<x-app-layout>
    <div class="container py-5">
        <div class="row">
            <div class="col-md-6 mx-auto">
                <form action="{{ route('contact.store') }}" method="POST" class="p-5 shadow bg-white">
                    @csrf

                    <x-alert />

                    <div class="form-group">
                        <label for="">Name <span class="text-danegr">*</span></label>
                        <input type="text" name="name" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="">Email <span class="text-danegr">*</span></label>
                        <input type="email" name="email" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="">Mobile</label>
                        <input type="tel" name="mobile" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="">Message <span class="text-danegr">*</span></label>
                        <textarea name="message" rows="3" class="form-control" required></textarea>
                    </div>
                    <button type="submit" class="btn btn-dark px-4">Submit</button>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>
