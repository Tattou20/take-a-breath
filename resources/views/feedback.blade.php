@extends('template')

@section('content')
<br/>
<br/>
<br/>
<section id="div-feedback" class="feedback-section" style="color: #ffffff;">

<div class="blue_violet_background"></div>

            <div class="container">
            <div class="blob" id="div-home">
        </div>
                <h1>Feedback</h1>
          
                </br>
                 <form action="submit_feedback.php" method="post">
                 
                    <label for="rating">Rate us:</label>
                    <input id="rating" name="rating" rows="1" required></input>
                    <label for="comment">Your feedback matter to us:</label>
                    <textarea id="comment" name="comment" rows="4" required></textarea>
                    <input id="date_posted" name="date_posted" value="" readonly required></input>

                    <button type="submit">Submit Feedback</button>
                </form>
                
                </br>
                </br>
            
            </div>
        </section>
        <br/>

@endsection
