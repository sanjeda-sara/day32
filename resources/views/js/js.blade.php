@extends('master')

@section('title')
    Java Script
@endsection

@section('body')
{{--    <h1 class="text-center text-info">hello world</h1>--}}
    <h1 id="h1" class=" text-info">  </h1>
    <div id="content"></div>
    <script>

        // --------------------------------FUNCTION-------------------------------------
        //-- block of code
        //-- used for specific tasks
        //-- cannot work alone
        //-- have to be called
        //-- is reuseable

        // function name() {
        //     document.write('Jenny');
        //     alert('hello there');
        // }
        // name();

        // var firstName = 'Shawon';
        // var lastName = 'Akter';
        //function e kono variable nei nai. The above two are declared globally
        // function printName() {
        //     document.write(firstName+ ' ' + lastName);
        // }
        // printName();
        //
        // getResult(10,2);
        // function getResult(firstNumber, lastNumber) {
        //     document.write(firstNumber - lastNumber + '<br/>');
        // }
        // getResult(100,50);

        function getFullName(firstName, lastName) {
            var fullName = firstName + ' ' + lastName;
            // var h1Element = document.getElementById('h1');
            // var h1Element = document.getElementsByTagName('h1')[0];
            //h1Element.innerHTML = fullName;
           // document.write(firstName + ' ' + lastName + '<br/>');
            document.getElementsByTagName('h1')[0].innerHTML = fullName; //by tag
        }
        getFullName('Habibur', "Rahman");




        //-------------------------------------------------------------------------------------------------------------------

        // --------------------------------ARRAY-------------------------------------
        //     var data = ['shila', 'sadia', false, 100, 100.25, 'bitm', true, 'bangladesh', 200, 250.25 ];

            // document.write(data[6]);
            // document.write(data[60]); --> output = undefined

        //to print each data separately in different lines:
        //document.write(data.length)


        {{--for(key in data)--}}
        {{--{--}}
        {{--    // document.write(data[key]+'<br/>');--}}
        {{--    // document.write([key]+' ' + data[key] + '<br/>');--}}
        {{--    @if(key > 1)--}}
        {{--    {--}}
        {{--        document.write(data[key] + '<br/>');--}}
        {{--    }--}}
        {{--}--}}

//-------------------------------------------------------------------------------------------------------------------

          // document.write("hello world")
          // var firstName = 'Sanjida';
          // var lastName = 'Akter';
          //
          // document.write(firstName + ' &nbsp;&nbsp;&nbsp; ' + lastName);

// --------------------------------------------Major Rules for Variables---------------------------------------------
//         1. starts with var
//         2. A-Z, a-z, 0-9, $
//         3. No number comes first

        // var Bangladesh = 'Hello Bangladesh';
        // var arif_name = 'his name is arif';
        // var hellojennifer = "Hello Jennifer";
        // var crShaheb = 'Sudipto Saha';
        //
        // var firstNumber = 10;
        // var bitm = 'bitm';
        //
        // document.write(typeof ('gfd'));
        // document.write(crShaheb);

// ------------------------------------------------------
        function createDiv(height, width, color) {
            var div = document.createElement('div');    //this div is just a variable name. thid can also be jenny
            div.style.height = height + 'px';
            div.style.width = width + 'px';
            div.style.backgroundColor = color;
            div.style.float = 'left';
            //div.style.borderRadius = '300px';
            div.setAttribute('id', 'colorDiv');

            var content = document.getElementById('content');
            content.append(div);
        }
        createDiv("300","400", "Red");
        createDiv("200","100", "Green");
        createDiv("300","150", "Gray");
        createDiv("500","300", "Black");


    </script>
@endsection
