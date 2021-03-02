<div class="container">
      <div class="py-5 text-center">
        <h2>The story: Geekseat Witch Saga: Return of The Coder!</h2>
        <p class="lead text-left">
          Somewhere far far away, there is a village which is controlled by a dark and cunning witch. Coincidentally, this witch is also a die-hard programmer.<br>
          The witch has power to control death and life of the villager. The witch will kill a number of villagers each year.<br>
          Since the witch is a die hard programmer, she follow a specific rule to decide the number of villagers she should kill each year.<br>
          &nbsp;&nbsp;&nbsp;On the 1st year she kills 1 villager<br>
          &nbsp;&nbsp;&nbsp;On the 2nd year she kills 1 + 1 = 2 villagers<br>
          &nbsp;&nbsp;&nbsp;On the 3rd year she kills 1 + 1 + 2 = 4 villagers<br>
          &nbsp;&nbsp;&nbsp;On the 4th year she kills 1 + 1 + 2 + 3 = 7 villagers<br>
          &nbsp;&nbsp;&nbsp;On the 5th year she kills 1 + 1 + 2 + 3 + 5 = 12 villagers And so on...<br>
          The villagers are furious with the witch and want to get rid of her and there is one way to get rid of her.<br>
          The witch will only leave if there is a brave programmer in the villager who can create a program to solve this problem:<br>
          If given two people whose age of death and year of death are known, find the average number of people the witch killed on year of birth of those people<br>
          Example:<br>
          Given:<br>
          - Person A: Age of death = 10, Year of Death = 12<br>
          - Person B: Age of death = 13, Year of Death = 17<br>
          Answer:<br>
          - Person A born on Year = 12 – 10 = 2, number of people killed on year 2 is 2. <br>
          - Person B born on Year = 17 – 13 = 4, number of people killed on year 4 is 7. <br>
          - So the average is ( 7 + 2 )/2 = 4.5<br>
          If you give invalid data (i.e. negative age, person who born before the witch took control) the program should return -1.<br>
          So, if a villager who can create a program to solve the problem, the witch will leave, and the killing will be stopped.<br>
          There was one programmer who was able to solve the problem, but the witch did not like the code because the code was messy and make her angry.<br>
          She then proceeded to kill the programmer. Now the villagers know that they also need to make the code clean and structured.<br>
          Now you are asked by the villager to make the code by previous programmer cleaner and beautifully structured.<br>
        </p>
      </div>

      <div class="row">
        <div class="col-md-12 order-md-1">
          <h4 class="mb-3">Villagers</h4>
          <form class="needs-validation" novalidate="" id="theForm" method="post">
            {!! csrf_field() !!}
            <div class="row">
              <div class="col-md-2 mb-3">
                <label for="firstName">Name</label>
                <input type="text" class="form-control" name="vilagers[1][name]" step="1" min="1" placeholder="" value="Person A" disabled="">
              </div>
              <div class="col-md-2 mb-3">
                <label for="firstName">Age of Death</label>
                <input type="number" class="form-control" name="vilagers[1][age]" step="1" min="1" placeholder="" value="" required="">
              </div>
              <div class="col-md-2 mb-3">
                <label for="lastName">Year of Death</label>
                <input type="number" class="form-control" name="vilagers[1][year]" step="1" min="1" placeholder="" value="" required="">
              </div>
              <div class="col-md-2 mb-3">
                <label for="lastName">Year</label>
                <input type="number" class="form-control" name="vilagers[1][show_year]" step="1" min="1" placeholder="" disabled value="" required="">
              </div>
              <div class="col-md-2 mb-3">
                <label for="lastName">Number People Death</label>
                <input type="number" class="form-control" name="vilagers[1][number]" step="1" min="1" placeholder="" disabled value="" required="">
              </div>
              <div class="col-md-2 mb-3" style="margin-top:32px">
                {{-- <button type="button" class="btn btn-primary">Add Vilagers</button> --}}
              </div>
            </div>
            <div class="row">
              <div class="col-md-2 mb-3">
                <label for="firstName">Name</label>
                <input type="text" class="form-control" name="vilagers[2][name]" step="1" min="1" placeholder="" value="Person B" disabled="">
              </div>
              <div class="col-md-2 mb-3">
                <label for="firstName">Age of Death</label>
                <input type="number" class="form-control" name="vilagers[2][age]" step="1" min="1" placeholder="" value="" required="">
              </div>
              <div class="col-md-2 mb-3">
                <label for="lastName">Year of Death</label>
                <input type="number" class="form-control" name="vilagers[2][year]" step="1" min="1" placeholder="" value="" required="">
              </div>
              <div class="col-md-2 mb-3">
                <label for="lastName">Year</label>
                <input type="number" class="form-control" name="vilagers[2][show_year]" step="1" min="1" placeholder="" disabled value="" required="">
              </div>
              <div class="col-md-2 mb-3">
                <label for="lastName">Number People Death</label>
                <input type="number" class="form-control" name="vilagers[2][number]" step="1" min="1" placeholder="" disabled value="" required="">
              </div>
              <div class="col-md-2 mb-3" style="margin-top:32px">
                <button type="button" class="btn btn-primary" onClick="addVillagers(this)">Add Vilagers</button>
              </div>
            </div>
          </form>
          <hr>
          <div class="col-md-4 order-md-2 mb-4">
            <h4 class="d-flex justify-content-between align-items-center mb-3">
              <span class="text-muted">Average</span>
              <span class="text-muted" id="showAv">0/0 = 0</span>
            </h4>
          </div>
          <hr>
          <button class="btn btn-primary btn-lg btn-block" type="button" onClick="compile()">Compile</button>
        </div>
      </div>

      <footer class="my-5 pt-5 text-muted text-center text-small">
        <p class="mb-1">© Mochamad Fajar Suada 2021</p>
        <ul class="list-inline">
          <li class="list-inline-item"><a href="#">Privacy</a></li>
          <li class="list-inline-item"><a href="#">Terms</a></li>
          <li class="list-inline-item"><a href="#">Support</a></li>
        </ul>
      </footer>
    </div>
