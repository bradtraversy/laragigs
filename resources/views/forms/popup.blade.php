<section class="pop-up" id="pop-up">
    <x-button class="btn btn-danger btn-lg  px-3" id="exit" onclick="closeForm()"><i
            class="fa fa-x"></i></x-button>

    <form action="" method="POST" class="book form-horizontal" id="book"
        name="applyForm" enctype="multipart/form-data">
        @csrf
        <h2>Apply Now</h2>
        @if (session()->has('message'))
            <div class="alert alert-success">
                {{ session()->get('message') }}
            </div>
        @endif
        <div class="form1">
            <label for="name">Names</label>
            <input type="text" name="name" placeholder="Full Names"
                class="px-4 py-2 shadow-xl rounded-xl placeholder-gray-50::placeholder">

            @error('name')
                <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
            @enderror
        </div>

        <div class="form1">
            <label for="email">Email</label>
            <input type="email" autocomplete="on" name="email" placeholder="name@example.com"
                class="px-2 py-2 shadow-xl
                                rounded-xl placeholder-gry-80::placeholder"
                required>
            @error('email')
                <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
            @enderror
        </div>


        <div class="form1">
            <label for="category">Job category</label>
            <input type="text" autocomplete="on" placeholder="Job Post" name="category" id="job"
                class="px-4 py-2 shadow-xl
                                rounded-xl placeholder-gray-50::placeholder"
                required>
            @error('category')
                <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
            @enderror
        </div>

        <div class="form1">
            <label for="country">Select Country</label>
            <select name="country" id="category" class="cat justify-center">
                <option value="" disabled>Countries</option>
                <option value="">Canada</option>
                <option value="">UK</option>
                <option value="">Poland</option>
                <option value="">Sychelles</option>
                <option value="">Phillipines</option>
                <option value="">Autralia</option>
            </select>

            @error('country')
                <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
            @enderror
        </div>

        <div class="form1">
            <label for="content">Subject</label>
            <textarea name="content" class="rounded-xl placeholder-gray-50::placeholder"
                placeholder="How are you suitable for this role?" id="area" cols="30" rows="2"></textarea>
        </div>

        <x-button class="btn btn-success btn-lg px-3" type="submit" name="send"
            value="submit">Submit</x-button>

    </form>



</section>
<section class="pop-up go1" id="go1">
    <button class="btn btn-danger btn-lg  px-3" id="exit" onclick="exitForm()"><i
            class="fa fa-x"></i></button>

    <form action="emails.email-template" method="POST" class="form-horizontal" id="book" name="Form"
        role="form" enctype="multipart/form-data">
        @csrf
        @if (session()->has('message'))
            <div class="alert alert-success">
                {{ session()->get('message') }}
            </div>
        @endif
        <h2>Book a Service</h2>
        <div class="form1">
            <label for="name">Names</label>
            <input type="text" name="name" placeholder="Full Names"
                class="px-4 py-2 shadow-xl rounded-xl placeholder-gray-50::placeholder">
        </div>

        <div class="form1">
            <label for="email">Email</label>
            <input type="email" autocomplete="on" placeholder="name@example.com"
                class="px-2 py-2 shadow-xl
                rounded-xl placeholder-gry-80::placeholder"
                required>
        </div>

        <div class="form1">
            <label for="category">Select Service</label>
            <select name="" id="category" class="justify-center">
                <option value="">Passport</option>
                <option value="">Visa</option>
                <option value="">Exam Booking</option>
                <option value="">Work Abroad</option>
                <option value="">E-Learning</option>
                <option value=""></option>
                <option value="">Autralia</option>
            </select>
        </div>

        <div class="form1">
            <label for="textarea">Comment</label>
            <textarea name="what can we do for you?" class="rounded-xl placeholder-gray-50::placeholder"
                placeholder="Give description of the service you would like" id="area" cols="30" rows="2"></textarea>
        </div>


        <x-button class="btn btn-success btn-lg px-3" type="submit">Submit</x-button>

    </form>

</section>

<section class="pop-up go2" id="go2">
    <button class="btn btn-danger btn-lg  px-3" id="exit" onclick="noForm()"><i
            class="fa fa-x"></i></button>
    <form action="emails.email-template" method="post" class="form-horizontal" id="book"
        enctype="multipart/form-data">
        @csrf
        @if (session()->has('message'))
            <div class="alert alert-success">
                {{ session()->get('message') }}
            </div>
        @endif
        <h2>Enrol Here</h2>

        <div class="form1">
            <label for="name">Names</label>
            <input type="text" name="name" placeholder="Full Names"
                class="px-4 py-2 shadow-xl rounded-xl placeholder-gray-50::placeholder">
        </div>

        <div class="form1">
            <label for="email">Email</label>
            <input type="email" autocomplete="on" placeholder="name@example.com"
                class="px-2 py-2 shadow-xl
                rounded-xl placeholder-gry-50::placeholder"
                required>
        </div>

        <div class="form1">
            <label for="category">Select School</label>
            <select name="" id="category">
                <option value="">Passport</option>
                <option value="">Visa</option>
                <option value="">Exam Booking</option>
                <option value="">Work Abroad</option>
                <option value="">E-Learning</option>
                <option value="">Study Abroad</option>
                <option value="">Autralia</option>
            </select>
        </div>

        <div class="form1">
            <label for="textarea">Comment</label>
            <textarea name="what can we do for you?" class="rounded-xl" placeholder="Describe mode of learning you would prefer"
                id="area" cols="30" rows="2"></textarea>
        </div>


        <x-button class="btn btn-success btn-lg px-3" type="submit">Submit</x-button>

    </form>
</section>
