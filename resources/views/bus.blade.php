@extends("theme")
@section("content")
<div class="container">
<div class="row">
<div class="col col-12 col-sm-4 col-md-4 col-lg-4 col-xl-4 col-xxl-4"></div>
<div class="col col-12 col-sm-4 col-md-4 col-lg-4 col-xl-4 col-xxl-4">
<form action="/busread" method="post">
{{csrf_field()}}
<table class="table table-borderless">
<tr>
    <td>bus no</td>
    <td><input name="bno" type="text" class="form-control"></td>
</tr>
<tr>
    <td>driver's name</td>
    <td><input name="bname" type="text" class="form-control"></td>
</tr>
<tr>
    <td>route</td>
    <td><input name="broute" type="text" class="form-control"></td>
   
</tr>
<tr>
    <td></td>
    <td><button class="btn btn-success">Submit</button></td>
</tr>
</table>
</form>
</div>
<div class="col col-12 col-sm-4 col-md-4 col-lg-4 col-xl-4 col-xxl-4"></div>
</div>
</div>

@endsection