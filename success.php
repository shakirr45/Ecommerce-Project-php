<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">

    <title>Document</title>
    <style>
        #balloon {
  width: 400px;
  display:block;
  height: 400px;
  margin-top: 50rem;
  margin:0 auto;
}

.balloon {
  width: 150px;
  height: 150px;
  background: linear-gradient(to top, #fe4a2b, #ff416d);
  border-radius: 50%;
  border: 4px solid #fe4b2b;
  position: absolute;
  left: 50%;
  top: 50px;
  transform: translate(-50%);
  animation: moving-balloon 3s ease infinite;
  
  &::after {
    content: "";
    position: absolute;
    top: 100px;
    left: 50%;
    transform: translate(-50%);
    border-top: 60px solid #fe4b2b;
	  border-left: 30px solid transparent;
	  border-right: 30px solid transparent;
	  height: 0;
	  width: 70px;
  }
  
  &::before {
    content: "";
    position: absolute;
    left: 50%;
    top: 150px;
    transform: translate(-50%);
    width: 70px;
    height: 25px;
    background-color: #E86B5A;
    border-radius: 5px;
  }
}

.basket {
  width: 42px;
  height: 28px;
  background: #D1C1A6;
  border-radius: 0 0 3px 3px;
  position: absolute;
  left: 50%;
  transform: translate(-50%);
  top: 270px;
  animation: moving-basket 3s ease infinite;
  
  &:before {
    content: "";
    position: absolute;
    width: 50px;
    height: 10px;
    background: #B2A082;
    border-radius: 3px;
    top: -10px;
    left: 50%;
    transform: translate(-50%);
  }

  &:after {
    content: "";
    width: 25px;
    height: 35px;
    position: absolute;
    top: -40px;
    left: 50%;
    transform: translate(-50%) perspective(50px) rotateX(-40deg);
    border-left: 2px solid #B2A082;
    border-right: 2px solid #B2A082;
  }
}

.cloud {
  position: absolute;
  top: 100px;
  right: 40px;
  width: 140px;
  height: 30px;
  background: #f4f8fc;
  border-radius:50px;
  animation: moving-cloud 3s ease infinite;
  
  &::before{
    content:"";
    position: absolute;
    top: -40px;
    left: 20px;
    width: 60px;
    height: 60px;
    background: #f4f8fc;
    border-radius: 50%;
  }
  
  &::after{
    content: "";
    position: absolute;
    top: -30px;
    right: 25px;
    width: 50px;
    height: 50px;
    background: #f4f8fc;
    border-radius: 50%;
  }
}


@keyframes moving-balloon {
	0% 	 {transform:  translate(-50%)}
	50% {transform: translate(-50%, -10%)}
}

@keyframes moving-basket {
	0% 	 {transform:  translate(-50%)}
	50% {transform: translate(-50%, -40%)}
}

@keyframes moving-cloud {
	0% 	 {transform:  translateX(0)}
	50% {transform: translateX(-7%)}
}


.rentalinfo{
  background:#f4f8fc;
  padding:2rem 4rem;;
  border-radius:12px; 
  max-width:600px;
  margin:0 auto;
}


#orderconfirmation{
    text-align:center;
}

.rentsection{
  margin:5rem 2rem 0;
}

.rentsection h3{
  margin-bottom:1rem;
}

.rentalgrid{
  display:grid;
  grid-template-columns: 1fr 1fr 1fr;
  max-width:800px;
  grid-row-gap:1.5rem;
  margin:0 auto;
}


.rentalgrid li{
  display:flex;
  flex-direction:column;
}

    </style>
</head>
  <a href="fst2.php"> <button type="button" class="btn btn-primary">Go Home</button></a>
<body>
<div id="orderconfirmation">

<div id="balloon">
  <div class="balloon"></div>
  <div class="basket"></div>  
  <div class="cloud"></div>
</div>
  
  <div class="rentalinfo">
  <h1>Your rental has been approved!</h1>
  <p>We've sent you a mail with all the details. Remember to take a look at our "Find Us" page, so you don't have to stress about where to pick your rental up.</p>

   <p class="rentalsubtext">Just show your confirmation mail when you arrive and you will be handed your rental.</p>
  </div>
  <section class="rentsection">
   <h3>transaction details</h3>
    <ul class="rentalgrid">
      <li>
        <h5>Date</h5>
        <p>May 20th, 2019</p>
      </li>

      <li>
        <h5>Payment method</h5>
        <p>Credit Card</p>
      </li>
    </ul>
  
  </section>
  
  
    <section class="rentsection">
     <h3>product details</h3>
  <ul class="rentalgrid">
    <li>
        <h5>booking id</h5>
        <p>#1234</p>
      </li>
   
      <li>
        <h5>pick up</h5>
        <p>may 22th, 2019</p>
      </li>
      <li>
        <h5>return</h5>
        <p>may 29th, 2019€</p>
      </li>
    
      <li>
        <h5>duration</h5>
        <p>8 days</p>
      </li>
     <li>
        <h5>Product</h5>
        <p>stroller</p>
      </li>
     <li>
        <h5>Add-ons</h5>
        <p>raincover</p>
       <p>ridingboard</p>
      </li>
    </ul>
      
  </section>
  
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>

</body>
</html>