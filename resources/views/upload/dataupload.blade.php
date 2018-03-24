@extends('layouts.app')

@section('heading')
    Befunde hochladen
@endsection

@section('content')
<div class="col-lg-12 col-md-7">
                        <div class="card">
                            <div class="header">
                                <h4 class="title">Befunde:</h4><br>
									


                                <form action="/store" enctype="multipart/form-data" method="post">
                                	{{csrf_field()}}
											<input type="file" name="image">
											<br> 
											<input type="submit" name="Upload">
											<br>
											<br>
								</form>
                            </div>
                            	
						</div>
							
@endsection