<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Form</title>
    <link rel="stylesheet" href="css/style.css" />
    <style>
        .modal-container {
            /* display: flex; */
            position: fixed;
            width: 100%;
            height: 100%;
            top: 0;
            left: 0;
        }
        
        .modal {
            background-color: #ddf7f8;
            margin: auto;
            width: 40%;
            padding: 50px;
            border-radius: 24px;
            border: 1px solid black;
            height: fit-content;
        }
        
        .modal-header {
            margin-bottom: 16px;
            text-align: center;
        }
        
        .modal-body {
            text-align: center;
        }
        
        .mb-4 {
            margin-bottom: 15px;
        }
        
        .button-modal {
            width: 80px;
            height: 40px;
            border-radius: 8px;
            border-color: transparent;
            background-color: #045256;
            font-weight: 600;
            color: white;
            font-size: 18px;
        }
    </style>
</head>

<body>
    <div class="container" style="background-color: #ddf7f8">
        <section>
            <div class="formheader">
                <a href="Campaign.php">
                    <img src="img/Arrow 3.png" alt="" />
                </a>
                <p>Volunteer Form</p>
                <div class="navform"></div>
            </div>
        </section>
        <section>
            <div class="form">
                <p>Please Fill Up The Form</p>
                <div class="column1">
                    <input type="text " placeholder="First Name " />
                    <input type="text " placeholder="Last Name " />
                </div>
                <div class="column2">
                    <input type="date" placeholder="Date of Birth " />
                    <select id="gender " name="gender ">
              <option value=" " disabled selected hidden>Gender</option>
              <option value="male ">Male</option>
              <option value="female ">Female</option>
            </select>
                </div>
                <div class="column3">
                    <input type="text " placeholder="Phone Number " />
                    <input type="email " placeholder="Email " />
                </div>
                <div class="column4">
                    <input type="text " placeholder="Address " />
                </div>
                <div class="column5">
                    <select id="job " name="job ">
              <option value=" " disabled selected hidden>Job</option>
              <option value="Student ">Student</option>
              <option value="Engineer ">Engineer</option>
              <option value="writer ">Writer</option>
              <option value="developer ">Developer</option>
              <option value="other ">Other</option>
            </select>
                    <select id="interest " name="interest ">
              <option value=" " disabled selected hidden>Interest</option>
              <option value="sport ">Sports</option>
              <option value="travel ">Travel</option>
              <option value="nature ">Nature</option>
              <option value="animal ">Animal</option>
              <option value="otherinterest ">Other</option>
            </select>
                </div>
                <div class="column6">
                    <textarea id="experience " name="experience " rows="4 " placeholder="Tell Us Your Experience "></textarea>
                </div>
                <div class="column7">
                    <input type="checkbox" id="confirmation " name="confirmation " />
                    <p style="margin-left: 20px">
                        Make sure to provide accurate and valid information to ensure that he registration proceeds can be received smoothly.
                    </p>
                </div>
                <div class="submitform">
                    <button type="submit" id="saveBtn">Save & Submit</button>
                </div>
            </div>
        </section>
    </div>
    <div class="modal-container hidden" id="modal">
        <div class="modal">
            <div class="modal-header">
                <h1>Thank You</h1>
            </div>
            <div class="modal-body">
                <div style="margin-bottom: 16px">
                    <svg width="194" height="194" viewBox="0 0 194 194" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path
                d="M142.367 69.94C142.882 70.4798 143.286 71.1157 143.555 71.8115C143.825 72.5074 143.955 73.2495 143.937 73.9955C143.92 74.7415 143.756 75.4767 143.454 76.1593C143.153 76.8418 142.72 77.4583 142.18 77.9735L86.6253 131.004C85.5684 132.012 84.1635 132.575 82.7024 132.575C81.2413 132.575 79.8364 132.012 78.7795 131.004L51.0012 104.489C49.9181 103.447 49.2919 102.018 49.2599 100.515C49.2279 99.0125 49.7925 97.5583 50.8302 96.4711C51.868 95.3838 53.2942 94.752 54.7967 94.714C56.2992 94.676 57.7556 95.2349 58.847 96.2683L82.7024 119.039L134.334 69.7532C134.874 69.238 135.51 68.8342 136.206 68.5648C136.901 68.2953 137.643 68.1656 138.389 68.1829C139.135 68.2003 139.87 68.3643 140.553 68.6658C141.235 68.9673 141.852 69.4003 142.367 69.94ZM193.181 96.5906C193.181 115.694 187.516 134.369 176.903 150.253C166.289 166.138 151.204 178.518 133.554 185.829C115.905 193.139 96.4835 195.052 77.7467 191.325C59.01 187.598 41.7992 178.399 28.2908 164.89C14.7823 151.382 5.58297 134.171 1.856 115.434C-1.87096 96.6977 0.0418509 77.2766 7.35256 59.627C14.6633 41.9773 27.0435 26.892 42.9278 16.2784C58.812 5.66494 77.4868 0 96.5906 0C122.199 0.0288962 146.751 10.2147 164.859 28.3226C182.967 46.4306 193.152 70.982 193.181 96.5906ZM181.818 96.5906C181.818 79.7343 176.819 63.2565 167.454 49.241C158.089 35.2255 144.779 24.3017 129.206 17.8511C113.632 11.4005 96.4961 9.71271 79.9637 13.0012C63.4312 16.2897 48.2452 24.4068 36.326 36.326C24.4068 48.2452 16.2898 63.4312 13.0013 79.9636C9.71275 96.496 11.4005 113.632 17.8512 129.206C24.3018 144.779 35.2255 158.089 49.241 167.454C63.2565 176.819 79.7343 181.818 96.5906 181.818C119.186 181.792 140.849 172.804 156.827 156.827C172.805 140.849 181.792 119.186 181.818 96.5906Z"
                fill="#045256"
              />
            </svg>
                </div>
                <h1 class="mb-4">Your Data Has Been Submitted</h1>
                <p class="mb-4">
                    Wait a few days for verification info. We will contact via email or whatsapp
                </p>
                <a href="Campaign.php"><button class="button-modal">OK</button></a>
            </div>
        </div>
    </div>
    <?php include 'footer.php' ?>
    <script>
        const toggleButton = document.getElementById("saveBtn"); // Ganti "toggle-button" dengan ID elemen toggle Anda

        toggleButton.addEventListener("click", function() {
            const targetElement = document.getElementById("modal"); // Ganti "target-element" dengan ID elemen target Anda

            targetElement.classList.toggle("hidden");
            targetElement.classList.toggle("flex");
        });
    </script>
</body>

</html>