<style>
        html{
          height: 100%;
          box-sizing: border-box;
        }
        body {
          width: 80%;
          position: relative;
          min-height: 100%;
          font-family: 'MedievalSharp';font-size: 2%;
          background-image: url(reka.jpg);
          background-repeat: no-repeat;
          background-position: center;
          background-attachment: fixed;
          background-size: cover;
          margin: auto;
          padding: 0;
          padding-bottom: 5rem;
          padding-top: 15px;
          box-sizing: inherit;
        }
        .transparent{
          margin: 15px auto;
          margin-bottom: 50px;
          font-family: 'MedievalSharp';font-size: 22px;
          background-color: #8B4513;
          background-image: url(pergamen.jpg);
          background-repeat: no-repeat;
          background-position: center;
          background-attachment: fixed;
          background-size: cover;
          border: 2px solid black;
          opacity: 0.90;
          z-index: -1;
          font-size: 21px;
          padding: 20px;
          border-radius: 20px;
          width: 90%;
        }
        .transparent p{
          font-family: 'MedievalSharp';font-size: 22px;
        }
        .navbar{
          background-image: url(drevo.jpg);
          background-repeat: no-repeat;
          background-position: center;
          background-attachment: fixed;
          background-size: cover;
          padding: 5px;
          margin-left: 3px;
          border-radius: 8px;
          border: 3px solid black;
        }
        .navbar button{
            background-color: #666;
          color:#fff;
          font-size: 15px;
          padding: 8px 8px;
          border-radius: 30px;
          justify-content:center;
          text-align:start;
          width: 60px;

        }
        .btn-secondary{
          background-color: #666;
          color:#fff;
          font-size: 15px;
          border-radius: 30px;
          margin: auto;
          margin-top:3px;
          min-width: 100px;
          max-width: 100px;
          text-align: center;
        }

        .dropdown-menu{
          padding:0;
          background-color: transparent;
          border: 0;
          text-align: center;
          margin: auto;
          transition: opacity 250ms ease-in-out;
          
        }

        .navbar b{
          background-color: #666;
          color:#fff;
          font-size: 15px;
          padding: 4px;
          text-align: center;
          width: 100px;
          border-radius: 15px;
          margin-left: 3px;
        }
        .li div{
          margin: AUTO;
          justify-content: center;
          opacity: 0;
        }
        
        .container {
            width: 300px;
            padding: 20px;
            background-color: #fff;
            border-radius: 5px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            margin: 50px auto;
        }
        h2 {
            margin-top: 0;
            text-align: center;
            color: #333;
        }
        label {
            display: block;
            margin-bottom: 5px;
            color: #666;
        }
        input[type="text"],
        input[type="password"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }
        input[type="submit"] {
            width: 100%;
            padding: 10px;
            background-color: #007bff;
            color: #fff;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            transition: background-color 0.3s;
        }
        textarea {
          width: 100%;
          height: 200px; /* Adjust height as needed */
          padding: 10px;
          box-sizing: border-box;
          border: 1px solid #ccc;
          border-radius: 5px;
          font-family: Arial, sans-serif;
          font-size: 14px;
          line-height: 1.5;
        }

        textarea:focus {
          outline: none;
          border-color: #007bff; /* Change border color when focused */
          box-shadow: 0 0 5px rgba(0, 123, 255, 0.5); /* Add a subtle shadow when focused */
        }
        input[type="submit"]:hover {
            background-color: #0056b3;
        }
        footer{
          text-align: center;
          background-image: url(drevo.jpg);
          background-repeat: no-repeat;
          background-position: center;
          background-attachment: fixed;
          background-size: cover;
          border: 2px solid black;
          z-index: -1;
          font-size: 21px;
          padding: 20px;
          position:absolute;
          margin-top: 10px;
          right: 0;
          left: 0;
          bottom: 0;
          border-top-right-radius: 23px;
          border-top-left-radius: 23px;
        }
    </style>