<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Luxury Homes Realty Inc.</title>

    <!-- Styles -->
    <style>
        body {
            margin: 0;
            padding: 0;
            height: 100vh;
            font-family: 'Nunito', sans-serif;
            background-image: url('https://media.salecore.com/salesaspects/shared/GlobalImageLibrary/Responsive/ElegantSeller/real-estate-home-exterior-40-1760-1000.jpg');
            background-size: cover;
            background-position: center;
            background-repeat: inherit;
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 20px;
        }

        .brand {
            position: absolute;
            top: 10px;
            left: 10px;
            background-color: #001f3f;
        }

        .brand img {
            width: 150px;
        }

        .title {
            text-align: center;
            font-size: 2rem;
            margin-top: 50px;
        }

        .card-container {
            display: flex;
            justify-content: space-around;
            flex-wrap: wrap;
            margin-top: 20px;
        }

        .card {
            background-color: #fff;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
            overflow: hidden;
            margin: 15px;
            width: 300px;
            transition: transform 0.3s ease-in-out;
        }

        .card:hover {
            transform: scale(1.05);
        }

        .card img {
            width: 100%;
            height: 200px;
            object-fit: cover;
            border-radius: 8px 8px 0 0;
        }

        .card-content {
            padding: 20px;
        }

        .card h3 {
            margin: 0;
            font-size: 1.5rem;
            color: #333;
        }

        .card p {
            margin: 10px 0;
            color: #666;
        }
    </style>
</head>
<body>
    <div class="brand">
        <a href="/"><img src="{{ asset('photos/logo1.png') }}" alt="Luxury Homes Realty Inc. Logo" class="logo"></a>
    </div>

    <div class="container">
        <div class="title">
            <h2 style="color: white;">Where We Are Located</h2>
        </div>

        <div class="card-container">
            <!-- Repeat the following card structure for each location -->
            <div class="card">
                <img src="{{ asset('photos/location1.png') }}" alt="Location 1">
                <div class="card-content">
                    <h3>Location Name 1</h3>
                    <p>Description: Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                </div>
            </div>

             <div class="card">
                <img src="{{ asset('photos/location2.png') }}" alt="Location 1">
                <div class="card-content">
                    <h3>Location Name 2</h3>
                    <p>Description: Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                </div>
            </div>

             <div class="card">
                <img src="{{ asset('photos/location3.png') }}" alt="Location 1">
                <div class="card-content">
                    <h3>Location Name 3</h3>
                    <p>Description: Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                </div>
            </div>

             <div class="card">
                <img src="{{ asset('photos/location4.png') }}" alt="Location 1">
                <div class="card-content">
                    <h3>Location Name 4</h3>
                    <p>Description: Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                </div>
            </div>

             <div class="card">
                <img src="{{ asset('photos/location5.png') }}" alt="Location 1">
                <div class="card-content">
                    <h3>Location Name 5</h3>
                    <p>Description: Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                </div>
            </div>

             <div class="card">
                <img src="{{ asset('photos/location6.png') }}" alt="Location 1">
                <div class="card-content">
                    <h3>Location Name 6</h3>
                    <p>Description: Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                </div>
            </div>

             <div class="card">
                <img src="{{ asset('photos/location7.png') }}" alt="Location 1">
                <div class="card-content">
                    <h3>Location Name 7</h3>
                    <p>Description: Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                </div>
            </div>

             <div class="card">
                <img src="{{ asset('photos/location8.png') }}" alt="Location 1">
                <div class="card-content">
                    <h3>Location Name 8</h3>
                    <p>Description: Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                </div>
            </div>

             <div class="card">
                <img src="{{ asset('photos/location9.png') }}" alt="Location 1">
                <div class="card-content">
                    <h3>Location Name 9</h3>
                    <p>Description: Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                </div>
            </div>

             <div class="card">
                <img src="{{ asset('photos/location10.png') }}" alt="Location 1">
                <div class="card-content">
                    <h3>Location Name 10</h3>
                    <p>Description: Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                </div>
            </div>

          

            <!-- Repeat similar structure for other locations -->
            <!-- ... -->
        </div>
    </div>
</body>
</html>
