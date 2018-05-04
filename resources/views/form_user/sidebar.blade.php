<form action="/users" method="post" role="form">

  {{csrf_field()}}
  <br><br><br>
  @if(count($errors) > 0)
  <div class="alert alert-danger">
    <ul>
      @foreach ($errors->all() as $error)
        <li>{{$error}}</li>
      @endforeach
    </ul>
  </div>
@endif

<label for="">Please complete the form bellew</label>
  <div class="form-group">
    <label for="">Personal information:</label>
    <div class = "form-group row">
      <label for="" class="col-2 col-form-label">First name: </label>
      <input type="text" placeholder="" class="form-control col-10" name="first_name" value="{{old('first_name')}}">
    </div>
    <div class = "form-group row">
      <label for="" class="col-2 col-form-label">Last name: </label>
      <input type="text" placeholder="" class="form-control col-10" name="last_name" value="{{old('last_name')}}">
    </div>
    <div class = "form-group row  ">
      <label for="" class="col-2 col-form-label">Email: </label>
      <input type="email" placeholder="" class="form-control col-10" name="email" value="{{old('email')}}">
    </div>
  </div>

  <div class="form-group">
    <label for="">Credit card information:</label>
    <div class="form-group row">
      <label for="" class="col-2 col-form-label">Credit card type: </label>
      <select name="type"class="form-control col-10">
        <option >Visa</option>
        <option >Master card</option>
      </select>
    </div>
    <div class = "form-group row  ">
      <label for="" class="col-2 col-form-label">Card Holder: </label>
      <input type="text" placeholder="" class="form-control col-10" name="card_holder" value="{{old('card_holder')}}">
    </div>
    <div class = "form-group row  ">
      <label for="" class="col-2 col-form-label">Card number: </label>
      <input type="text" placeholder="" class="form-control col-10" name="card_number" value="{{old('card_number')}}">
    </div>
    <div class = "form-group row  ">
      <label for="" class="col-2 col-form-label">Cvv2</label>
      <input type="text" placeholder="" class="form-control col-10" name="cvv2" value="{{old('cvv2')}}">
    </div>
    <div class = "form-group row  ">
      <label for="" class="col-2 col-form-label">Exp. date:</label>
      <select name="month"class="form-control col-5">
        <option>01</option>
        <option>02</option>
        <option>03</option>
      </select>
      <select name="year"class="form-control col-5">
        <option>2018</option>
        <option>2019</option>
        <option>2020</option>
      </select>
    </div>
  </div>

  <div class="form-group">
    <label for="">Builling address:</label>
    <div class = "form-group row  ">
      <label for="" class="col-2 col-form-label">Stret address:</label>
      <input type="text" placeholder="" class="form-control col-10" name="street" value="{{old('street')}}">
    </div>
    <div class = "form-group row  ">
      <label for="" class="col-2 col-form-label">City:</label>
      <input type="text" placeholder="" class="form-control col-10" name="city" value="{{old('city')}}">
    </div>
    <div class = "form-group row  ">
      <label for="" class="col-2 col-form-label">State:</label>
      <select name="state"class="form-control col-10">
        <option>California</option>
        <option>Florida</option>
        <option>Texas</option>
      </select>
    </div>
    <div class = "form-group row  ">
      <label for="" class="col-2 col-form-label">ZIP:</label>
      <input type="text" placeholder="" class="form-control col-10" name="zip" value="{{old('zip')}}">
    </div>
    <div class = "form-group row  ">
      <label for="" class="col-2 col-form-label">Country:</label>
      <select name="country"class="form-control col-10">
        <option>United Stades</option>
        <option>Canada</option>
      </select>
    </div>
    <div class = "form-group row  ">
      <label for="" class="col-2 col-form-label">Phone</label>
      <input type="text" placeholder="" class="form-control col-10" name="phone" value="{{old('phone')}}">
    </div>
  </div>

  <div class="form-group row">
    <input type="checkbox" class="form-control col-1" name="check">
    <label for="" class="col-11 col-form-label">Check here to certufy that you are 18 years of age or older and agree to the terms of this purchase.</label>
  </div>

  <div class="d-flex justify-content-center">
    <button class="btn btn-outline-secondary" type="submit">Send</button>
  </div>

</form>
