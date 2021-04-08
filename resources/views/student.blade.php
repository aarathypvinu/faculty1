@extends("theme")
@section("content")

<div class="container">
<div class="row">
<div class="col col-12 col-sm-4 col-md-4 col-lg-4 col-xl-4 col-xxl-4"></div>
<div class="col col-12 col-sm-4 col-md-4 col-lg-4 col-xl-4 col-xxl-4">
<form action="/studentread" method="post">
{{csrf_field()}}
<table class="table table-borderless">
<tr>
    <td>name</td>
    <td><input name="sname" type="text" class="form-control"></td>
</tr>
<tr>
    <td>roll no</td>
    <td><input name="sno" type="text" class="form-control"></td>
</tr>
<tr>
    <td>admission no</td>
    <td><input name="sad" type="text" class="form-control"></td>
</tr>
<tr>
    <td>college</td>
    <td><input name="scol" type="text" class="form-control"></td>
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