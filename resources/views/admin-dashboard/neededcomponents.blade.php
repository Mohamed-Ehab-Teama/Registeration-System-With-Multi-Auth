@extends('admin-dashboard.master');

@section('title', 'Home Page')


@section('content')

<!-- ------------------------------------------------------------------ -->

<h2 class="page-title">Basic table</h2>
<p> Tables with built-in bootstrap styles </p>
<div class="row">
    <!-- simple table -->
    <div class="col-md-6 my-4">
        <div class="card shadow">
            <div class="card-body">
                <h5 class="card-title">Simple Table</h5>
                <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Company</th>
                            <th>Address</th>
                            <th>Date</th>
                            <th>Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>3224</td>
                            <td>Keith Baird</td>
                            <td>Enim Limited</td>
                            <td>901-6206 Cras Av.</td>
                            <td>Apr 24, 2019</td>
                            <td><span class="badge badge-pill badge-warning">Hold</span></td>
                        </tr>
                        <tr>
                            <td>3218</td>
                            <td>Graham Price</td>
                            <td>Nunc Lectus Incorporated</td>
                            <td>Ap #705-5389 Id St.</td>
                            <td>May 23, 2020</td>
                            <td><span class="badge badge-pill badge-success">Success</span></td>
                        </tr>
                        <tr>
                            <td>2651</td>
                            <td>Reuben Orr</td>
                            <td>Nisi Aenean Eget Limited</td>
                            <td>7425 Malesuada Rd.</td>
                            <td>Nov 4, 2019</td>
                            <td><span class="badge badge-pill badge-warning">Hold</span></td>
                        </tr>
                        <tr>
                            <td>2636</td>
                            <td>Akeem Holder</td>
                            <td>Pellentesque Associates</td>
                            <td>896 Sodales St.</td>
                            <td>Mar 27, 2020</td>
                            <td><span class="badge badge-pill badge-danger">Danger</span></td>
                        </tr>
                        <tr>
                            <td>2757</td>
                            <td>Beau Barrera</td>
                            <td>Augue Incorporated</td>
                            <td>4583 Id St.</td>
                            <td>Jan 13, 2020</td>
                            <td><span class="badge badge-pill badge-success">Success</span></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div> <!-- simple table -->
</div> <!-- end section -->


<!-- ------------------------------------------------------------------ -->

<div class="col-12">
    <h2 class="page-title">Form elements</h2>
    <p class="text-muted">Demo for form control styles, layout options, and custom components for creating a
        wide variety of forms.</p>
    <div class="card shadow mb-4">
        <div class="card-header">
            <strong class="card-title">Form controls</strong>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group mb-3">
                        <label for="simpleinput">Text</label>
                        <input type="text" id="simpleinput" class="form-control">
                    </div>
                    <div class="form-group mb-3">
                        <label for="example-email">Email</label>
                        <input type="email" id="example-email" name="example-email" class="form-control"
                            placeholder="Email">
                    </div>
                    <div class="form-group mb-3">
                        <label for="example-password">Password</label>
                        <input type="password" id="example-password" class="form-control" value="password">
                    </div>
                    <div class="form-group mb-3">
                        <label for="example-palaceholder">Placeholder</label>
                        <input type="text" id="example-palaceholder" class="form-control" placeholder="placeholder">
                    </div>
                </div> <!-- /.col -->
                <div class="col-md-6">
                    <div class="form-group mb-3">
                        <label for="example-helping">Helping text</label>
                        <input type="text" id="example-helping" class="form-control"
                            placeholder="Input with helping text">
                        <span class="help-block"><small>A block of help text that breaks onto a new line.</small></span>
                    </div>
                    <div class="form-group mb-3">
                        <label for="example-readonly">Readonly</label>
                        <input type="text" id="example-readonly" class="form-control" readonly="" value="Readonly value">
                    </div>
                    <div class="form-group mb-3">
                        <label for="example-disable">Disabled</label>
                        <input type="text" class="form-control" id="example-disable" disabled="" value="Disabled value">
                    </div>
                    <div class="form-group mb-3">
                        <label for="example-static">Static control</label>
                        <input type="text" readonly="" class="form-control-plaintext" id="example-static"
                            value="j@example.com">
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- / .card -->
    
</div> <!-- .col-12 -->

<!-- ------------------------------------------------------------------ -->

@endsection