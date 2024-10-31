<?php
// Namespace untuk kelas-kelas di dalam aplikasi
namespace App;

// Trait untuk fungsi yang bisa digunakan oleh Customer dan MakeupArtist
trait HasEmail {
    private $email;

    public function setEmail($email) {
        $this->email = $email;
    }

    public function getEmail() {
        return $this->email;
    }
}

// Abstract class sebagai template untuk Customer dan MakeupArtist
abstract class Person {
    protected $name;
    protected $age;

    public function __construct($name, $age) {
        $this->name = $name;
        $this->age = $age;
    }

    abstract public function getDetails(); // Abstract method yang harus diimplementasikan oleh subclass

    // Magic method __toString
    public function __toString() {
        return "Name: $this->name, Age: $this->age";
    }
}

// Class Customer yang mewarisi dari Person
class Customer extends Person {
    use HasEmail; // Menggunakan Trait

    private $customerId;

    public function __construct($name, $age, $customerId) {
        parent::__construct($name, $age);
        $this->customerId = $customerId;
    }

    public function getDetails() {
        return "Customer ID: $this->customerId, Name: $this->name, Age: $this->age, Email: " . $this->getEmail();
    }
}

// Class MakeupArtist yang mewarisi dari Person
class MakeupArtist extends Person {
    use HasEmail; // Menggunakan Trait

    private $specialty;

    public function __construct($name, $age, $specialty) {
        parent::__construct($name, $age);
        $this->specialty = $specialty;
    }

    public function getDetails() {
        return "Specialty: $this->specialty, Name: $this->name, Age: $this->age, Email: " . $this->getEmail();
    }
}

// Penggunaan namespace Main
namespace Main;

use App\Customer;
use App\MakeupArtist;

// Membuat objek Customer dan MakeupArtist
$customer = new Customer("Sarah", 28, 201);
$customer->setEmail("sarah@example.com");

$makeupArtist = new MakeupArtist("Linda", 35, "Bridal Makeup");
$makeupArtist->setEmail("linda@example.com");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Makeup Booking Information</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #ffe6e6;
            color: #333;
            margin: 0;
            padding: 0;
        }
        .container {
            max-width: 800px;
            margin: 20px auto;
            padding: 20px;
            background-color: #fff5f5;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        .title {
            text-align: center;
            font-size: 26px;
            color: #cc6699;
            margin-bottom: 20px;
        }
        .card {
            border: 2px solid #ffcccb;
            padding: 15px;
            border-radius: 8px;
            margin-bottom: 20px;
            background-color: #ffe6e6;
        }
        .card h3 {
            margin: 0;
            color: #cc6699;
        }
        .card p {
            margin: 5px 0;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="title">Makeup Booking Information</div>

        <!-- Customer Information -->
        <div class="card">
            <h3>Customer Information</h3>
            <p><?php echo $customer->getDetails(); ?></p>
        </div>

        <!-- Makeup Artist Information -->
        <div class="card">
            <h3>Makeup Artist Information</h3>
            <p><?php echo $makeupArtist->getDetails(); ?></p>
        </div>
    </div>
</body>
</html>