<div class="form-group">
    <label>Country</label>
    <select class="form-control" value="{{ old('pays') }}" name="pays" id="abcd" required>
        <option selected="">Select your country</option>
        @foreach ($countries as $country)
            <option value="{{ $country['countryCode'] }}">{{ $country['countryName'] }}</option>
        @endforeach
    </select>
    <div class="icon">
        <i class="ri-earth-line"></i>
    </div>
</div>


<div class="form-group">
    <label>City</label>
    <select class="form-control" value="{{ old('ville') }}" name="ville" id="abcd" aria-label="Default select example" required>
        <option selected="">Select your city</option>
    </select>
    <div class="icon">
        <i class="ri-building-line"></i>
    </div>
</div>