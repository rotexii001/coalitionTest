@extends('layout.master')
@section('html_class','')
@section('title','')
@section('bodyClass','')
@section('headerfile_unauth')
 @parent
@endsection


@section('contentData')
<div class="top-content">
        	
            <div class="inner-bg">
                <div class="container">
                	
                    
                    
                    <div class="row">

                        <div class="col-sm-1"></div>
                        	
                        <div class="col-sm-5">
                        	
                        	<div class="form-box">
                        		<div class="form-top">
	                        		<div class="form-top-left">
	                        			<h3>Products</h3>
	                        		</div>
	                        		<div class="form-top-right">
	                        			<i class="fa fa-pencil"></i>
	                        		</div>
	                            </div>
                                  
	                            <div class="form-bottom">
				                    <form role="form" id="add-form" method="post" class="registration-form">
				                    	<div class="form-group">
				                    		<label class="sr-only" for="form-first-name">Product Name</label>
				                        	<input type="text" name="product" placeholder="Product" class="form-first-name form-control" id="product">
				                        </div>
				                        <div class="form-group">
				                        	<label class="sr-only" for="form-last-name">Quantity</label>
				                        	<input type="text" name="quantity" placeholder="Qantity Available" class="form-last-name form-control" id="quantity">
				                        </div>
				                        <div class="form-group">
				                        	<label class="sr-only" for="form-email">Price</label>
				                        	<input type="text" name="price" placeholder="Price" class="form-email form-control" id="price">
				                        </div>
				                        
				                        <span id="add-new-product" class="btn">ADD NEW</span> <span id="Process-state"></span>
				                    </form>
			                    </div>
                        	</div>
                        	
                        </div>

                        <div class="col-sm-5">
                        	
                        	<div class="form-box">
                        		<div class="form-top">
	                        		<div class="form-top-left">
	                        			<h3>Product List</h3>
	                        		</div>
	                        		
	                            </div>
                                  
	                            <div class="form-bottom">
				                    <table id="responseBar" width="100%" >
                                        <tr>
                                            <th>Product Name</th>
                                            <th>Quantity</th>
                                            <th>Price</th>
                                        </tr>
                                    </table>
			                    </div>
                        	</div>
                        	
                        </div>
                    </div>
                    
                </div>
            </div>
            
        </div>

@endsection

@section('footerJs')
  @parent
@endsection



