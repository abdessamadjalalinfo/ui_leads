@extends('layouts.app')
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-eMNCOe7tC1doHpGoWe/6oMVemdAVTMs2xqW4mwXrXsW0L84Iytr2wi5v2QjrP/xp" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.min.js" integrity="sha384-cn7l7gDp0eyniUwwAZgrzD06kc/tftFf19TOAs2zVinnD/C7E91j9yyk5//jjpt/" crossorigin="anonymous"></script>

@section('content')
<div class="container">
    <div class="accordion" id="accordionExample">
  <div class="accordion-item">
    <h2 class="accordion-header" id="headingOne">
      <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
      Home
      </button>
    </h2>
    <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
      <div class="accordion-body">
          <form action='{{route('update_home')}}'>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Cover Name</label>
    <input name="name_cover" value="{{$home->name_cover}}" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
   
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Description of Cover</label>
    <input name="description_cover" value="{{$home->description_cover}}" type="text" class="form-control" id="exampleInputPassword1">
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Name of section 1</label>
    <input name="name_section1" value="{{$home->name_section1}}"  type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
   
  </div>
    <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Description of section 1</label>
    <input name="description_section1" value="{{$home->description_section1}}"  type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
   
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Name of section 2</label>
    <input  name="name_section2" value="{{$home->name_section2}}" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
   
  </div>
    <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Description of section 2</label>
    <input   name="description_section2" value="{{$home->description_section2}}"type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
   
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Client review description</label>
    <input name="client_review_desc" value="{{$home->client_review_desc}}" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
   
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Description of footer</label>
    <input   name="description_footer" value="{{$home->client_review_desc}}" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
   
  </div>
 
  <button type="submit" class="btn btn-primary">save</button>
</form>
      </div>
      
    </div>
  </div>
  <div class="accordion-item">
    <h2 class="accordion-header" id="headingTwo">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
       Services
      </button>
    </h2>
    <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
      <form  action='{{route('update_service')}}'  class="accordion-body">
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Cover Name</label>
    <input name="name_cover" value="{{$service->name_cover}}" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
   
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Description of Cover</label>
    <input name="description_cover" value="{{$service->description_cover}}" type="text" class="form-control" id="exampleInputPassword1">
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Name of section 1</label>
    <input  name="name_section1" value="{{$service->name_section1}}" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
   
  </div>
    <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Description of section 1</label>
    <input  name="description_section1" value="{{$service->description_section1}}" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
   
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Name of section 2</label>
    <input  name="name_section2" value="{{$service->name_section2}}" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
   
  </div>
    <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Description of section 2</label>
    <input   name="description_section2" value="{{$service->description_section2}}"type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
   
  </div>
   <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Name of section 3</label>
    <input  name="name_section3" value="{{$service->name_section3}}"type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
   
  </div>
    <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Description of section 3</label>
    <input  name="description_section3" value="{{$service->description_section3}}" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
   
  </div>
   <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Name of section 4</label>
    <input name="name_section4" value="{{$service->name_section4}}" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
   
  </div>
    <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Description of section 4</label>
    <input   name="description_section4" value="{{$service->description_section4}}" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
   
  </div>
   <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Name of section 5</label>
    <input  name="name_section5" value="{{$service->name_section5}}" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
   
  </div>
    <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Description of section 5</label>
    <input name="description_section5" value="{{$service->description_section5}}"  type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
   
  </div>
   <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Name of section 6</label>
    <input name="name_section6" value="{{$service->name_section6}}" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
   
  </div>
    <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Description of section 6</label>
    <input name="description_section6" value="{{$service->description_section6}}" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
   
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Description of footer</label>
    <input name="description_footer" value="{{$service->description_footer}}" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
   
  </div>
 
  <button type="submit" class="btn btn-primary">save</button>
</form>
    </div>
  </div>
  <div class="accordion-item">
    <h2 class="accordion-header" id="headingThree">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
      Organization
      </button>
    </h2>
    <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
      <div class="accordion-body">
          <form action='{{route('update_organization')}}'>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Cover Name</label>
    <input name="name_cover" value="{{$organization->name_cover}}"type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
   
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Description of Cover</label>
    <input name="description_cover" value="{{$organization->description_cover}}" type="text" class="form-control" id="exampleInputPassword1">
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Name of section 1</label>
    <input  name="name_section1" value="{{$organization->name_section1}}"type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
   
  </div>
    <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Description of section 1</label>
    <input  name="description_section1" value="{{$organization->description_section1}}" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
   
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Name of section 2</label>
    <input  name="name_section2" value="{{$organization->name_section2}}" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
   
  </div>
    <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Description of section 2</label>
    <input  name="description_section2" value="{{$organization->description_section2}}" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
   
  </div>
   <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Name of section 3</label>
    <input  name="name_section3" value="{{$organization->name_section3}}" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
   
  </div>
   <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Description of section 3</label>
    <input   name="description_section3" value="{{$organization->description_section3}}"type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
   
  </div>

  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Description of footer</label>
    <input  name="description_footer" value="{{$organization->description_footer}}" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
   
  </div>
 
  <button type="submit" class="btn btn-primary">save</button>
</form>
      </div>
    </div>
  </div>
  <div class="accordion-item">
    <h2 class="accordion-header" id="headingThree">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapsefour" aria-expanded="false" aria-controls="collapseThree">
      Vacancies
      </button>
    </h2>
    <div id="collapsefour" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
     <div class="accordion-body">
          <form action='{{route('update_vacancies')}}'>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Cover Name</label>
    <input  name="name_cover" value="{{$vacancie->name_cover}}" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
   
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Description of Cover</label>
    <input   name="description_cover" value="{{$vacancie->description_cover}}" type="text" class="form-control" id="exampleInputPassword1">
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Name of section 1</label>
    <input   name="name_section1" value="{{$vacancie->name_section1}}" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
   
  </div>
    <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Description of section 1</label>
    <input name="description_section1" value="{{$vacancie->description_section1}}" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
   
  </div>

   
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Description of footer</label>
    <input  name="description_footer" value="{{$vacancie->description_footer}}" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
   
  </div>
 
  <button type="submit" class="btn btn-primary">save</button>
</form>
      </div>
    </div>
  </div>
  <div class="accordion-item">
    <h2 class="accordion-header" id="headingThree">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapsefive" aria-expanded="false" aria-controls="collapseThree">
      Contact
      </button>
    </h2>
    <div id="collapsefive" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
      <div class="accordion-body">
          <form action='{{route('update_contact')}}'>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Cover Name</label>
    <input name="name_cover" value="{{$contact->name_cover}}" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
   
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Description of Cover</label>
    <input name="description_cover" value="{{$contact->description_cover}}" type="text" class="form-control" id="exampleInputPassword1">
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Adresse</label>
    <input  name="adresse" value="{{$contact->adresse}}" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
   
  </div>
    <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Phone</label>
    <input name="numero" value="{{$contact->numero}}" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
   
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Email</label>
    <input name="email" value="{{$contact->email}}" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
   
  </div>
 

  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Description of footer</label>
    <input  name="description_footer" value="{{$vacancie->description_footer}}" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
   
  </div>
 
  <button type="submit" class="btn btn-primary">save</button>
</form>
      </div>
    </div>
  </div>
  
</div>
</div>
@endsection
