<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

        <script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
        {{-- <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script> --}}
    </head>
    <body class="antialiased">
        @include('content')

        <script type="text/javascript">
        $(document).ready(function () {

        })

        function compile()
        {
          $.post('{{ url('witch') }}', $('#theForm').serialize()).done(function (response) {
              var sum = 0;
              var total = 0;
              var htm = "";
              var data = response.data;
              $.each(data, function (index, value) {
                  total++;
                  $('input[name="vilagers['+index+'][number]"]').val(value.number);
                  $('input[name="vilagers['+index+'][show_year]"]').val(value.show_year);
                  sum += value.number;
                  if(index > 1)
                  {
                      htm += " + ";
                  }

                  htm += value.number;
              })

              $(showAv).html("("+htm+")/"+total+" = "+ (sum/total));
          });
        }

        function addVillagers(element)
        {
            var ind = $('div.row').length;
            var character = String.fromCharCode(64 + (ind));
            var html = `<div class="row">
              <div class="col-md-2 mb-3">
                <label for="firstName">Name</label>
                <input type="text" class="form-control" name="vilagers[`+ind+`][name]" step="1" min="1" placeholder="" value="Person `+character+`" disabled="">
              </div>
              <div class="col-md-2 mb-3">
                <label for="firstName">Age of Death</label>
                <input type="number" class="form-control" name="vilagers[`+ind+`][age]" step="1" min="1" placeholder="" value="" required="">
              </div>
              <div class="col-md-2 mb-3">
                <label for="lastName">Year of Death</label>
                <input type="number" class="form-control" name="vilagers[`+ind+`][year]" step="1" min="1" placeholder="" value="" required="">
              </div>
              <div class="col-md-2 mb-3">
                <label for="lastName">Year</label>
                <input type="number" class="form-control" name="vilagers[`+ind+`][show_year]" step="1" min="1" placeholder="" disabled value="" required="">
              </div>
              <div class="col-md-2 mb-3">
                <label for="lastName">Number People Death</label>
                <input type="number" class="form-control" name="vilagers[`+ind+`][number]" step="1" min="1" placeholder="" disabled value="" required="">
              </div>
              <div class="col-md-2 mb-3" style="margin-top:32px">
                <button type="button" class="btn btn-danger" onClick="removeVillagers(this)">Remove Vilagers</button>
              </div>
            </div>`
            $('form').append(html);
        }

        function removeVillagers(element)
        {
            $(element).parents('div.row:first').remove();
            name();
        }

        function name(){
            $('div.row').each(function (i,e) {
                var character = String.fromCharCode(64 + (i));
                $(e).find('input[name^="vilagers"][name$="[name]"]').attr('value', "Person " + character);
            })
        }
        </script>
    </body>
</html>
