<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>About Us</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }

        header {
            background-color: #f2f2f2;
            text-align: center;
            padding: 50px 0;
            background-image: url('nik-shuliahin-0nrv0Dp4DTM-unsplash.jpg');
            background-size: cover;
            background-position: center;
        }

        header h1 {
            font-family: 'Lato', sans-serif;
            font-size: 36px;
            color: #fff;
            margin-bottom: 10px;
        }

        header p {
            font-size: 18px;
            color: #fff;
        }

        .btn {
            display: inline-block;
            padding: 10px 20px;
            background-color: #348560;
            color: #fff;
            text-decoration: none;
            border-radius: 5px;
            transition: background-color 0.3s ease;
        }

        .btn:hover {
            background-color: #0bb895;
        }

        section {
            padding: 50px 0;
        }

        section h2 {
            text-align: center;
            margin-bottom: 30px;
        }

       .destinations {
    display: flex;
    flex-direction: column; /* Stack cards vertically */
    justify-content: center;
    flex-wrap: wrap;
    padding: 0 20px;
    gap: 10px; /* Space between cards */
}

.destination-card {
    background-color: #fff;
    border-radius: 8px;
    box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
    height: auto; /* Automatically adjust height based on content */
    width: 400px; /* Increase this value to make the card wider */
    text-align: center;
    padding: 500px;
    margin: 10px 0; /* Space around each card */
    transform: rotate(90deg); /* Rotate the card */
    overflow: hidden;
}

.destination-card img {
    margin-right: 1000px;
    width: 100%; /* Make the image fit the width of the card */
    height: auto;
    border-bottom: 1px solid #ddd;
    transform: rotate(270deg); /* Rotate the image to appear upright */
}

.destination-card h4 {
    margin-right: 900px;
    font-size: 18px;
    transform: rotate(270deg);
}

.destination-card h3 {
    margin-right: 1000px;
    font-size: 18px;
    transform: rotate(270deg);
}

.destination-card p {
    text-align: left;
    margin-right: 30px;
    font-size: 16px;
    transform: rotate(270deg);
}


.destination-card a {
    text-decoration: none;
    color: #348560;
    font-weight: bold;
}

.destination-card a:hover {
    text-decoration: underline;
}
        

        footer {
            background-color: #333;
            color: #fff;
            padding: 20px 0;
            text-align: center;
        }

        footer nav ul {
            list-style: none;
            padding: 0;
        }

        footer nav ul li {
            display: inline;
            margin: 0 10px;
        }

        footer nav ul li a {
            color: #fff;
            text-decoration: none;
            transition: color 0.3s ease;
        }

        footer nav ul li a:hover {
            color: #f2f2f2;
        }
    </style>
</head>
<body>
    <header>
        <h1>This is an E-Tour Guide</h1>
        <p>Welcome to Your Gateway to Greece</p>
    </header>
    <main>
        <section id="about-us">
            <h2>Activities</h2>
        </section>
      <section id="explore">
    <h2>Explore. Discover. Experience.</h2>
    <div class="destinations">
        <div class="destination-card">
            <img src="miltiadis-fragkidis-axXmXFO4a2E-unsplash.jpg" alt="Chalkidiki, Pefkohori" loading="lazy">
            <h4>Chalkidiki Pefkohori</h4>
            <p><u>➤Scuba & Snorkeling :</u> Εξερεύνησε τον μαγευτικό βυθό της Χαλκιδικής με ασφάλεια επιλέγοντας μια οργανωμένη κατάδυση. 
                Μια εμπειρία που αξίζει και θα θυμάσαι για όλη σου τη ζωή! 
                Τα εκπληκτικά πεντακάθαρα νερά της Χαλκιδικής μπορούν να σου εξασφαλίσουν εξαιρετική ορατότητα, 
                ενώ ο πλούσιος βυθός σε ποικιλία ειδών και θαλάσσιων οργανισμών θα σου χαρίσει μια μοναδική καταδυτική εμπειρία.
            
            <u>➤Παραλία Πευκοχώρι :</u> Αν επιλέξεις για διαμονή το Πευκοχώρι, καλό είναι να γνωρίζεις πως μέσα στο χωριό υπάρχει μια παραλία κατάλληλη για κολύμβηση με χρυσαφένια αμμουδιά και καταγάλανα νερά που ενδεικνύεται επίσης και για ψάρεμα. 
                Η παραλία είναι φιλική προς τις οικογένειες με παιδιά αλλά και απέναντι προς όλες τις ηλικίες καθώς έχει να προσφέρει πλήθος δραστηριοτήτων, όπως θαλάσσια σπορ ενώ ταυτόχρονα είναι πλήρως οργανωμένη. 
                Επίσης, σε απόσταση μόλις λίγων μέτρων θα βρεις καφετέριες, εστιατόρια και ταβέρνες.
            </p>
        </div>
        <div class="destination-card">
            <img src="branko-besevic-Vx96fUuN8sY-unsplash.jpg" alt="Crete, Rethimno" loading="lazy">
            <h3>Crete Rethimno</h3>    
            <p><u>➤ Φρούριο Φορτέτζα :</u> Η Φορτέτζα είναι το Φρούριο Ρεθύμνου που δεσπόζει πάνω από την Παλιά Πόλη, στο λόφο Παλαιόκαστρο. 
                Στην τοποθεσία αυτή υπήρχε η ακρόπολη της αρχαίας Ρήθυμνας. 
                Η Φορτέτζα κατασκευάστηκε από τους Ενετούς γύρω στο 1573 ενώ πέρασε στα χέρια των Οθωμανών το 1646. 
                Όσα σπίτια υπήρχαν μέσα στην ακρόπολη κατεδαφίστηκαν στον Β’ Παγκόσμιο Πόλεμο, αλλά ευτυχώς παρέμειναν μερικά ιστορικά κτίρια.
            
            <u>➤ Μεγάλη Πόρτα :</u> Η Μεγάλη Πόρτα ή αλλιώς Πύλη Guora ή Porta Guora είναι ουσιαστικά η είσοδος για την Παλιά Πόλη του Ρεθύμνου, η οποία άνοιγε μόλις ξημέρωνε η μέρα και έκλεινε μόλις νύχτωνε. 
                Χτίστηκε μεταξύ 1566-1568 στα χρόνια του Jacopo Guoro, από τον οποίο πήρε και το όνομά της. 
                Η Μεγάλη Πόρτα είναι από τα λίγα διασωθέντα αξιοθέατα από τις ενετικές οχυρώσεις που χτίστηκαν μεταξύ 1540-1570.
            </p>
        </div>
        <div class="destination-card">
            <img src="nafsika-g-jsuXYamJbeg-unsplash.jpg" alt="Thessaloniki" loading="lazy">
            <h3>Thessaloniki</h3>
            <p><u>➤Καράβι ΚΛΕΙΩ :</u> Καράβι ΚΛΕΙΩ – Το πλωτό μπαρ της Θεσσαλονίκης. 
                Αποτελεί ιδανικό προορισμό για όσους θέλουν ένα στέκι, καθόλου στάσιμο, με θέα στον ορίζοντα. 
                Μπορείτε να απολαύσετε από το bar το κοκτέιλ της επιλογής σας, οι ρυθμοί που θα συνοδεύουν την επιλογή του ποτού σας είναι ethnic με εξωτικό χαρακτήρα. 
                Είτε νωρίς το πρωί για όσους θέλουν να απολαύσουν την ημέρα τους, είτε στο κλείσιμο της ημέρας μετά τη δουλειά μία βόλτα με το καράβι, αποτελεί ένα ευχάριστο διάλειμμα από τους ακατάπαυστους ρυθμούς της πόλης.
            
            <u>➤Αρχαιολογικό Μουσείο Θεσσαλονίκης :</u> Το Αρχαιολογικό Μουσείο Θεσσαλονίκης είναι από τα μεγαλύτερα μουσεία της χώρας και το κεντρικό μουσείο της Βόρειας Ελλάδας. 
                Με μοναδικές συλλογές αρχαίων αντικειμένων, με πλούσια δραστηριότητα και εξωστρέφεια είναι πάντα έτοιμο να καλωσορίσει τους επισκέπτες του.
            </p>
        </div>
    </div>
</section>
    </main>
    <footer>
        <p>&copy; 2024 Greece Explorer</p>
        <nav>
            <ul>
                <li><a href="HomePage.php">Home</a></li>
                <li><a href="About Us.php">About Us</a></li>
                <li><a href="Contact.php">Contact</a></li>
            </ul>
        </nav>
    </footer>
</body>
</html>
