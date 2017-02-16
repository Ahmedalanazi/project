@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Platform Rubric</div>
                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="POST" action="{{ url('/register') }}">
                        {{ csrf_field() }}

                        
                        <h4> ORGANIZATION </h4>

                        <div class="container">
                                <a href="#" data-toggle="Popover" data-placement="bottom" title="Popover Header" 
                                data-content="1- Presentation is clear, logical and organized. 
                                              2- Listener can follow the line of reasoning."> Sophisticated (5)</a>

                                <a href="#" data-toggle="Popover" data-placement="bottom" title="Popover Header" 
                                data-content="1- Presentation is generally clear and well organized. 
                                              2- A few minor points may be confusing."> Competent (3)</a>
                                             

                                             
                                <a href="#" data-toggle="Popover" data-placement="bottom" title="Popover Header" 
                                data-content="1- Listener can follow presentation only with effort. 
                                              2- Some arguments are not clear. 
                                              3- Organization seems haphazard."> Not Yet Competent (1)</a>
                        </div>



                        <div class="form-group{{ $errors->has('criteria_one') ? ' has-error' : '' }}">

                            <div class="col-md-4">

                                <div class="radio">
                                      <label><input type="radio" name="criteria_one" id="criteria_one" value="1"> 1 </label>
                                </div>
                                <div class="radio">
                                      <label><input type="radio" name="criteria_one" id="criteria_one" value="2"> 2 </label>
                                </div>
                                <div class="radio">
                                      <label><input type="radio" name="criteria_one" id="criteria_one" value="3"> 3 </label>
                                </div>
                                <div class="radio">
                                      <label><input type="radio" name="criteria_one" id="criteria_one" value="4"> 4 </label>
                                </div>
                                <div class="radio">
                                      <label><input type="radio" name="criteria_one" id="criteria_one" value="5"> 5 </label>
                                </div>
                            

                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('criteria_one_comment') ? ' has-error' : '' }}">
                            <label for="criteria_one_comment" class="col-md-4 control-label">Comment</label>

                            <div class="col-md-6">
                                <input id="criteria_one_comment" type="textarea" class="form-control" name="criteria_one_comment" value="{{ old('criteria_one_comment') }}">

                            </div>
                        </div>


                        <h4> STYLE </h4>

                        <div class="container">
                                <a href="#" data-toggle="Popover" data-placement="bottom" title="Popover Header" 
                                data-content="1- Level of presentation is appropriate for the audience. 
                                              2- Presentation is a planned conversation, paced for audience understanding. It is not a reading of a paper. 
                                              3- Speaker is clearly comfortable in front of the group and can be heard by all."> Sophisticated (5)</a>

                                <a href="#" data-toggle="Popover" data-placement="bottom" title="Popover Header" 
                                data-content="1- Level of presentation is generally appropriate. Pacing is sometimes too 
                                              fast or slow. 
                                              2- The presenter seems slightly uncomfortable at times, and the audience occasionally has trouble hearing him/her."> Competent (3)</a>
                                             

                                             
                                <a href="#" data-toggle="Popover" data-placement="bottom" title="Popover Header" 
                                data-content="1- Aspects of presentation are too elementary or too sophisticated for audience.
                                              2- Presenter seems uncomfortable and can be heard only if listener is very attentive. 
                                              3- Much of the information is read."> Not Yet Competent (1)</a>
                        </div>



                        <div class="form-group{{ $errors->has('criteria_two') ? ' has-error' : '' }}">

                            <div class="col-md-4">

                                <div class="radio">
                                      <label><input type="radio" name="criteria_two" id="criteria_two" value="1"> 1 </label>
                                </div>
                                <div class="radio">
                                      <label><input type="radio" name="criteria_two" id="criteria_two" value="2"> 2 </label>
                                </div>
                                <div class="radio">
                                      <label><input type="radio" name="criteria_two" id="criteria_two" value="3"> 3 </label>
                                </div>
                                <div class="radio">
                                      <label><input type="radio" name="criteria_two" id="criteria_two" value="4"> 4 </label>
                                </div>
                                <div class="radio">
                                      <label><input type="radio" name="criteria_two" id="criteria_two" value="5"> 5 </label>
                                </div>
                            

                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('criteria_two_comment') ? ' has-error' : '' }}">
                            <label for="criteria_two_comment" class="col-md-4 control-label">Comment</label>

                            <div class="col-md-6">
                                <input id="criteria_two_comment" type="textarea" class="form-control" name="criteria_two_comment" value="{{ old('criteria_two_comment') }}">

                            </div>
                        </div>


                         <h4> USE OF COMMUNICATION AIDS </h4>

                        <div class="container">
                                <a href="#" data-toggle="Popover" data-placement="bottom" title="Popover Header" 
                                data-content="1- Communication aids enhance the presentation. They are prepared in a professional manner. 2- Font on visuals is large enough to be seen by all. 3- Information is organized to maximize audience understanding. 4- Details are minimized so that the main points stand out."> Sophisticated (5)</a>

                                <a href="#" data-toggle="Popover" data-placement="bottom" title="Popover Header" 
                                data-content="1- Communication aids contribute to the quality of the presentation. 2- Font size is appropriate for reading. 3- Appropriate information is included. 4- Some material is not supported by visual aids."> Competent (3)</a>
                                             

                                             
                                <a href="#" data-toggle="Popover" data-placement="bottom" title="Popover Header" 
                                data-content="1- Communication aids are poorly prepared or used inappropriately. Font is too small to be easily seen. Too much information is included. Unimportant material is highlighted. Listeners may be confused."> Not Yet Competent (1)</a>
                        </div>



                        <div class="form-group{{ $errors->has('criteria_three') ? ' has-error' : '' }}">

                            <div class="col-md-4">

                                <div class="radio">
                                      <label><input type="radio" name="criteria_three" id="criteria_three" value="1"> 1 </label>
                                </div>
                                <div class="radio">
                                      <label><input type="radio" name="criteria_three" id="criteria_three" value="2"> 2 </label>
                                </div>
                                <div class="radio">
                                      <label><input type="radio" name="criteria_three" id="criteria_three" value="3"> 3 </label>
                                </div>
                                <div class="radio">
                                      <label><input type="radio" name="criteria_three" id="criteria_three" value="4"> 4 </label>
                                </div>
                                <div class="radio">
                                      <label><input type="radio" name="criteria_three" id="criteria_three" value="5"> 5 </label>
                                </div>
                            

                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('criteria_three_comment') ? ' has-error' : '' }}">
                            <label for="criteria_three_comment" class="col-md-4 control-label">Comment</label>

                            <div class="col-md-6">
                                <input id="criteria_three_comment" type="textarea" class="form-control" name="criteria_three_comment" value="{{ old('criteria_three_comment') }}">

                            </div>
                        </div>


                        <h4> DEPTH OF CONTENT </h4>

                        <div class="container">
                                <a href="#" data-toggle="Popover" data-placement="bottom" title="Popover Header" 
                                data-content="1- Speaker provides an accurate and complete explanation of key concepts and theories, drawing upon the relevant literature. 2- Applications of theory are included to illuminate issues. 3- Listeners gain insight."> Sophisticated (5)</a>

                                <a href="#" data-toggle="Popover" data-placement="bottom" title="Popover Header" 
                                data-content="1- For the most part, explanations of concepts and theories are accurate and complete. 2- Some helpful applications are included."> Competent (3)</a>
                                             

                                             
                                <a href="#" data-toggle="Popover" data-placement="bottom" title="Popover Header" 
                                data-content="1- Explanations of concepts and/or theories are inaccurate or incomplete. 2- Little attempt is made to tie theory to practice. 3- Listeners gain little from the presentation."> Not Yet Competent (1)</a>
                        </div>



                        <div class="form-group{{ $errors->has('criteria_four') ? ' has-error' : '' }}">

                            <div class="col-md-4">

                                <div class="radio">
                                      <label><input type="radio" name="criteria_four" id="criteria_four" value="1"> 1 </label>
                                </div>
                                <div class="radio">
                                      <label><input type="radio" name="criteria_four" id="criteria_four" value="2"> 2 </label>
                                </div>
                                <div class="radio">
                                      <label><input type="radio" name="criteria_four" id="criteria_four" value="3"> 3 </label>
                                </div>
                                <div class="radio">
                                      <label><input type="radio" name="criteria_four" id="criteria_four" value="4"> 4 </label>
                                </div>
                                <div class="radio">
                                      <label><input type="radio" name="criteria_four" id="criteria_four" value="5"> 5 </label>
                                </div>
                            

                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('criteria_four_comment') ? ' has-error' : '' }}">
                            <label for="criteria_four_comment" class="col-md-4 control-label">Comment</label>

                            <div class="col-md-6">
                                <input id="criteria_four_comment" type="textarea" class="form-control" name="criteria_four_comment" value="{{ old('criteria_four_comment') }}">

                            </div>
                        </div>

                        <h4> GRAMMAR AND WORD CHOICE </h4>

                        <div class="container">
                                <a href="#" data-toggle="Popover" data-placement="bottom" title="Popover Header" 
                                data-content="1- Sentences are complete, grammatically correct and flow together easily. 2- Words are chosen for their precise meaning."> Sophisticated (5)</a>

                                <a href="#" data-toggle="Popover" data-placement="bottom" title="Popover Header" 
                                data-content="1- For the most part, sentences are complete, grammatically correct and flow together easily. 2- With a few exceptions, words are chosen for their precise meaning."> Competent (3)</a>
                                             

                                             
                                <a href="#" data-toggle="Popover" data-placement="bottom" title="Popover Header" 
                                data-content="1- Listeners can follow the presentation, but they are distracted by some grammatical errors and use of slang. 2- Some sentences are incomplete/halting/, and/or vocabulary is somewhat limited or inappropriate."> Not Yet Competent (1)</a>
                        </div>



                        <div class="form-group{{ $errors->has('criteria_five') ? ' has-error' : '' }}">

                            <div class="col-md-4">

                                <div class="radio">
                                      <label><input type="radio" name="criteria_five" id="criteria_five" value="1"> 1 </label>
                                </div>
                                <div class="radio">
                                      <label><input type="radio" name="criteria_five" id="criteria_five" value="2"> 2 </label>
                                </div>
                                <div class="radio">
                                      <label><input type="radio" name="criteria_five" id="criteria_five" value="3"> 3 </label>
                                </div>
                                <div class="radio">
                                      <label><input type="radio" name="criteria_five" id="criteria_five" value="4"> 4 </label>
                                </div>
                                <div class="radio">
                                      <label><input type="radio" name="criteria_five" id="criteria_five" value="5"> 5 </label>
                                </div>
                            

                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('criteria_five_comment') ? ' has-error' : '' }}">
                            <label for="criteria_five_comment" class="col-md-4 control-label">Comment</label>

                            <div class="col-md-6">
                                <input id="criteria_five_comment" type="textarea" class="form-control" name="criteria_five_comment" value="{{ old('criteria_five_comment') }}" >

                            </div>
                        </div>

                        <h4> PROFESSIONALISM </h4>

                        <div class="container">
                                <a href="#" data-toggle="Popover" data-placement="bottom" title="Popover Header" 
                                data-content="Conduct and mannerisms are appropriate for the occasion and the audience."> Sophisticated (5)</a>

                                <a href="#" data-toggle="Popover" data-placement="bottom" title="Popover Header" 
                                data-content="1- Conduct and mannerisms are appropriate for the occasion and audience. 2- However, some aspects of conduct reflect a lack of sensitivity to nuances of the occasion or expectations of the audience."> Competent (3)</a>
                                             

                                             
                                <a href="#" data-toggle="Popover" data-placement="bottom" title="Popover Header" 
                                data-content="Conduct and mannerisms are inappropriate for the occasion and audience."> Not Yet Competent (1)</a>
                        </div>



                        <div class="form-group{{ $errors->has('criteria_six') ? ' has-error' : '' }}">

                            <div class="col-md-4">

                                <div class="radio">
                                      <label><input type="radio" name="criteria_six" id="criteria_six" value="1"> 1 </label>
                                </div>
                                <div class="radio">
                                      <label><input type="radio" name="criteria_six" id="criteria_six" value="2"> 2 </label>
                                </div>
                                <div class="radio">
                                      <label><input type="radio" name="criteria_six" id="criteria_six" value="3"> 3 </label>
                                </div>
                                <div class="radio">
                                      <label><input type="radio" name="criteria_six" id="criteria_six" value="4"> 4 </label>
                                </div>
                                <div class="radio">
                                      <label><input type="radio" name="criteria_six" id="criteria_six" value="5"> 5 </label>
                                </div>
                            

                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('criteria_six_comment') ? ' has-error' : '' }}">
                            <label for="criteria_six_comment" class="col-md-4 control-label">Comment</label>

                            <div class="col-md-6">
                                <input id="criteria_six_comment" type="textarea" class="form-control" name="criteria_six_comment" value="{{ old('criteria_six_comment') }}">

                            </div>
                        </div>

                        <h4> VERBAL INTERACTION </h4>

                        <div class="container">
                                <a href="#" data-toggle="Popover" data-placement="bottom" title="Popover Header" 
                                data-content="1- Consistently clarifies, restates, and responds to questions. 2- Summarizes when needed."> Sophisticated (5)</a>

                                <a href="#" data-toggle="Popover" data-placement="bottom" title="Popover Header" 
                                data-content="1- Generally responds to audience comments, questions and needs. 2- Misses some opportunities for interaction."> Competent (3)</a>
                                             

                                             
                                <a href="#" data-toggle="Popover" data-placement="bottom" title="Popover Header" 
                                data-content="Responds to questions inadequately."> Not Yet Competent (1)</a>
                        </div>



                        <div class="form-group{{ $errors->has('criteria_seven') ? ' has-error' : '' }}">

                            <div class="col-md-4">

                                <div class="radio">
                                      <label><input type="radio" name="criteria_seven" id="criteria_seven" value="1"> 1 </label>
                                </div>
                                <div class="radio">
                                      <label><input type="radio" name="criteria_seven" id="criteria_seven" value="2"> 2 </label>
                                </div>
                                <div class="radio">
                                      <label><input type="radio" name="criteria_seven" id="criteria_seven" value="3"> 3 </label>
                                </div>
                                <div class="radio">
                                      <label><input type="radio" name="criteria_seven" id="criteria_seven" value="4"> 4 </label>
                                </div>
                                <div class="radio">
                                      <label><input type="radio" name="criteria_seven" id="criteria_seven" value="5"> 5 </label>
                                </div>
                            

                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('criteria_seven_comment') ? ' has-error' : '' }}">
                            <label for="criteria_seven_comment" class="col-md-4 control-label">Comment</label>

                            <div class="col-md-6">
                                <input id="criteria_seven_comment" type="textarea" class="form-control" name="criteria_seven_comment" value="{{ old('criteria_seven_comment') }}">

                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                <a href="{{$platformscoresheet->id}}\update">
                                    submit
                                    </a>
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection


<script src="/js/app.js"></script>