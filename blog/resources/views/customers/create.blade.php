<div class="container">
    <div class="panel panel-default">
        <div class="panel-header">
            <h4>Add new customer</h4>
        </div>
        <div class="panel-body">

            {!! Form::open(['url'=>"/customers/create",'method' => 'post']) !!}
                {!! Form::customText('name','Name',"",['id'=>'name','placeholder'=>"Enter name"]) !!}
                {!! Form::customText('address','Address',"",['id'=>'address','placeholder'=>"Enter Address"]) !!}
                {!! Form::customText('mobile_number','Mobile number',"",['id'=>'mobile_number','placeholder'=>"Enter Mobile number"]) !!}
                {!! Form::customText('age','Age',"",['id'=>'age','placeholder'=>"Enter age"]) !!}
                {!! Form::customText('type','Type',"",['id'=>'name','placeholder'=>"Enter Type"]) !!}
                {!! Form::submit("Submit",['class'=>"btn btn-primary"]) !!}
            {!! Form::close() !!}

            {{-- <form class="" action="/customers/create" method="post">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" class="form-control" id="name" name="name" placeholder="Enter name">
                </div>

                <div class="form-group">
                    <label for="address">Address</label>
                    <input type="text" class="form-control" id="address" name="address" placeholder="Enter address">
                </div>
                <div class="form-group">
                    <label for="mobile_number">Mobile number</label>
                    <input type="text" class="form-control" id="mobile_number" name="mobile_number" placeholder="Enter mobile number">
                </div>
                <div class="form-group">
                    <label for="age">Age</label>
                    <input type="text" class="form-control" id="age" name="age" placeholder="Enter age">
                </div>
                <div class="form-group">
                    <label for="age">Type</label>
                    <input type="text" class="form-control" id="type" name="type" placeholder="Enter type">
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form> --}}

        </div>
    </div>
</div>
