@extends('layou.app')
@section('content')
<br>
<br>

    <main class="page contact-us-page">
        <section class="clean-block clean-form dark">
            <div class="container" style="font-size: 16px;">
                <div class="row" style="padding-top: 5%;">
                    <div class="col">
                    <div class="block-heading">
                    <h2 class="text-success" style="background: rgba(255,255,255,0.2);color: var(--bs-blue);font-size: 43px;text-align: center;border-style: none;"><strong>Contact Us</strong></h2>
                        <p><br>You Can Join us or Provide advice or request about the System by email us or<br><br>Syria , Damascus , Faculty of Informatics Engineering<br>TEL 1 : +963932895825<br>TEL 2 : +963999999999<br>info@EMSITE.com<br></p>
                    </div>
                    </div>
                    <div class="col">
                        <form action="{{route('Contact.store')}}" method="post" style="background: linear-gradient(black 0%, var(--bs-green) 0%);">
                            @csrf
                            <div class="mb-3">
                                <label class="form-label" for="name">
                                <strong>Name</strong>
                                </label>
                            <input class="form-control" type="text" id="name" name="name">
                           </div>
                            <div class="mb-3">
                                <label class="form-label" for="subject" name="subject">
                                <strong>Subject</strong>
                            </label>
                            <input class="form-control" type="text" id="subject" name="subject"></div>
                            <div class="mb-3">
                                <label class="form-label" for="email" name="email">
                                <strong>Email</strong>
                            </label>
                                <input class="form-control" type="email" id="email" name="email">
                            </div>
                            <div class="mb-3">
                                <label class="form-label" for="message" name="message">
                                    <strong>Message</strong>
                                </label>
                                <textarea class="form-control" id="message" name="message">
                                    
                                </textarea>
                            </div>
                            <div class="mb-3">
                                    <button class="btn btn-primary" type="submit" style="background: var(--bs-cyan);">Send</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
@endsection