<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1,shrink-to-fit=no">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Hotel Booking</title>
    <meta charset="utf-8">

  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <script src="https://kit.fontawesome.com/44f557ccce.js"></script>
    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">
    
    <style>
        .well
        {
            background: rgba(0,0,0,0.5);
            border: none;
        }
		body
		{
			background-image: url('images/back1.jpg');
            background-size:cover;
			background-repeat: no-repeat;
			background-attachment: fixed;
            display:flex;
		}
  

.rev-section{
  margin: auto;
  padding: 0 1rem;
  max-width: 1100px;
  text-align: center;
}

.title{
  font-size: 55px;
  padding:20px;
  font-weight:bold;
  text-transform: uppercase;
  color:black;
  margin-bottom: .5rem;
}
.note{
  font-size: 1.1rem;
  color: rgb(150, 150, 150);
  font-style: italic;
    color: red;
  font

}

.reviews{
  margin: 2rem auto;
  display: flex;
  flex-wrap: wrap;
}
.review{
  margin: 0 1rem;
  min-width: 300px;
  flex: 1;
}

.head-review{
  margin: 1.75rem auto;
  width: 150px;
  height: 150px;
}
img{
  width: 100%;
  height: 100%;
  object-fit: cover;
  border-radius: 50%;
  box-shadow: 0 10px 25px rgba(0, 0, 0, .25);
}

.body-review{
  background-color: rgb(238, 238, 238);
  padding: 2.5rem;
  box-shadow: 2px 2px 10px 3px rgb(225, 225, 225);
}
.name-review{
  font-size: 1.5rem;
  color: rgb(50, 50, 50);
  margin-bottom: .25rem;
}
.place-review{
  color: red;
  font-style: italic;
}
.rating{
  color: rgb(253, 180, 42);
  margin: 1rem 0;
}
.desc-review{
  line-height: 1.5rem;
  letter-spacing: 1px;
  color: rgb(150, 150, 150);
}

@media (max-width: 678px){
  .review{
    margin-top: 1.5rem;
  }
}
    </style>
    
    
</head>

<body>
    <div class="container">
       <img class="img-responsive" src="images/palm.jpg" style="width:100%%; height:180px;">      
        <nav class="navbar navbar-inverse">
            <div class="container-fluid">
                <ul class="nav navbar-nav">
                    <li><a href="index.php">Home</a></li>
                    <li><a href="room.php">Room &amp; Facilities</a></li>
                    <li><a href="reservation.php">Online Reservation</a></li>
                    <li class="active"><a href="review.php">Review</a></li>
                    <li><a href="admin.php">Admin</a></li>
                </ul>
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="http://www.facebook.com"><img src="images/facebook.png"></a></li>
                    <li><a href="http://www.twitter.com"><img src="images/twitter.png"></a></li>                    
                </ul>
            </div>
        </nav>
        <div class="rev-section">

<h2 class="title">Our Guests Love Us</h2>
<div class="reviews">
<div class="review">
   <div class="head-review">
      <img src="images/pic4.webp" width="250px">
   </div>
   <div class="body-review">
      <div class="name-review">Pia Sutaria</div>
      <div class="place-review">Kochi</div>
      <div class="rating">
         <i class="fas fa-star"></i>
         <i class="fas fa-star"></i>
         <i class="fas fa-star"></i>
         <i class="fas fa-star"></i>
         <i class="fas fa-star-half"></i>
      </div>
      <div class="desc-review">Courteous Staff. Manager and Supervisor are proactive and customer friendly.A good place to stay.Kudos to the palms team</div>
   </div>
</div>
<div class="review">
   <div class="head-review">
      <img src="images/pic5.webp" width="250px">
   </div>
   <div class="body-review">
      <div class="name-review">Anjali Deshpande</div>
      <div class="place-review">Delhi</div>
      <div class="rating">
         <i class="fas fa-star"></i>
         <i class="fas fa-star"></i>
         <i class="fas fa-star"></i>
         <i class="fas fa-star"></i>
         <i class="fas fa-star"></i>
      </div>
      <div class="desc-review">Good value for money. Will definitely will visit again if I get a chance. The staff was polite and the room was cozy.</div>
   </div>
</div>
<div class="review">
   <div class="head-review">
      <img src="images/pic1.jpeg" width="250px">
   </div>
   <div class="body-review">
      <div class="name-review">John Pinto</div>
      <div class="place-review">Bangalore</div>
      <div class="rating">
         <i class="fas fa-star"></i>
         <i class="fas fa-star"></i>
         <i class="fas fa-star"></i>
         <i class="fas fa-star"></i>
         <i class="fas fa-star"></i>
      </div>
      <div class="desc-review">The stay was quite good. The staff is very helpful. The location is quite good, you can easily access local buses.
</div>
   </div>
</div>
<div class="review">
   <div class="head-review">
      <img src="images/pic2.webp" width="250px">
   </div>
   <div class="body-review">
      <div class="name-review">Rohan Singh</div>
      <div class="place-review">Haryana</div>
      <div class="rating">
         <i class="fas fa-star"></i>
         <i class="fas fa-star"></i>
         <i class="fas fa-star"></i>
         <i class="fas fa-star"></i>
         <i class="fas fa-star"></i>
      </div>
      <div class="desc-review">This is my 2 stay in this Hotel.Excellent Service..I liked the.Cleanliness of this hotel.Especially Bathrooms are very well maintained.</div>
   </div>
</div>
<div class="review">
   <div class="head-review">
      <img src="images/pic3.jpeg" width="250px">
   </div>
   <div class="body-review">
      <div class="name-review">Kabir Verma</div>
      <div class="place-review">Lucknow</div>
      <div class="rating">
         <i class="fas fa-star"></i>
         <i class="fas fa-star"></i>
         <i class="fas fa-star"></i>
         <i class="fas fa-star"></i>
         <i class="fas fa-star"></i>
      </div>
      <div class="desc-review">Absolutely perfect stay! yummy food,nice and calm location,newly started,Corporate hub,great deals,happy faces</div>
   </div>
</div>
<div class="review">
   <div class="head-review">
      <img src="images/pic6.jpeg" width="250px">
   </div>
   <div class="body-review">
      <div class="name-review">Kavya Pathak</div>
      <div class="place-review">Kolkata</div>
      <div class="rating">
         <i class="fas fa-star"></i>
         <i class="fas fa-star"></i>
         <i class="fas fa-star"></i>
         <i class="fas fa-star"></i>
         <i class="fas fa-star-half"></i>
      </div>
      <div class="desc-review">Quite loving experience and comfortable. From location wise it's amazing and security protocols are worth praising.</div>
   </div>
</div>
</div>
</div>
    </div>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
</body>

</html>