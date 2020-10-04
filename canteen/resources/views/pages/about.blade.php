@extends('customer.layouts.app')

@section('content')
    <div class = "row justify-content-center">
        <!-- column starts-->
        <div class = "col-md-12">
            <div class = "card mb-4">
                <div class ="card-header"><h2><?php echo $title; ?></h2></div>
                <div class ="card-body">
                        <h4>We are a team of enginners who aim to bring to you a state-of-the-art canteen system.<br><br>
                            The canteen system aims to improve the quality of lives of our valuable customers by facilitating the ordering of foods seamlessly and conveniently without the need to physically queue at the store.<br><br>
                            We hope you enjoyed our services as we continue to improve and bring to you the latest and greatest technologies and features to make your experience better.</h4>
                </div>
            </div>
        </div>
        <br>
        <div class = "col-md-12">
            <div class = "card mb-3">
                <div class ="card-header"><h2>Contact Us</h2></div>
                <div class ="card-body">
                        <h4>For any enquiries or feedback, please contact us at:</h4>
                        <h4>manager@manager.com</h4>
                </div>
            </div>
        </div>
        <!-- ends column-->
    </div>
@endsection