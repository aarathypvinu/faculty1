
@extends("theme")
@section("content")
<div class="container">
<div class="row">
<div class="col col-12 col-sm-4 col-md-4 col-lg-4 col-xl-4 col-xxl-4"></div>
<div class="col col-12 col-sm-4 col-md-4 col-lg-4 col-xl-4 col-xxl-4">
<form action="/facultyread" method="post">
{{csrf_field()}}
<table class="table table-borderless">
<tr>
    <td>name</td>
    <td><input name="fname" type="text" class="form-control"></td>
</tr>
<tr>
    <td>designation</td>
    <td><input name="fdes" type="text" class="form-control"></td>
</tr>
<tr>
    <td>college</td>
    <td><input name="fcoll" type="text" class="form-control"></td>
</tr>
<tr>
    <td>contact</td>
    <td><input name="fcon" type="text" class="form-control"></td>
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