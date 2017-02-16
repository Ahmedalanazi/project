@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Poster Rubric</div>
                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="POST" action="/posterScoreSheets/{{$posterscoresheets->id}}/update">
                        {{ csrf_field() }}

                        
                        <h4> ORGANIZATION </h4>

                        <div class="container">
                                <a  data-toggle="Popover" data-placement="bottom" title="Popover Header" 
                                data-content="* Presentation is clear, logical and organized. * Reader can follow the line of reasoning."> Sophisticated (5)</a>

                                <a data-toggle="Popover" data-placement="bottom" title="Popover Header" 
                                data-content="* Presentation is generally clear and well organized. * A few minor points may be confusing."> Competent (3)</a>
                                             

                                             
                                <a  data-toggle="Popover" data-placement="bottom" title="Popover Header" 
                                data-content="* Reader can follow presentation only with effort. * Some arguments are not clear. * Organization seems haphazard."> Not Yet Competent (1)</a>
                        </div>


                        <div class="form-group{{ $errors->has('criteria_one') ? ' has-error' : '' }}">

                            <div class="col-md-4">

                                <div class="radio">
                                      <label><input type="radio" name="criteria_one" id="criteria_one" value="1" required> 1 </label>
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


                        <h4> PRESENTATION OF POSTER </h4>

                        <div class="container">
                                <a data-toggle="Popover" data-placement="bottom" title="Popover Header" 
                                data-content="* Poster is prepared in a professional manner. * Font is large enough to be easily read. * Information is organized to maximize audience understanding. * Details are minimized so that the main points stand out."> Sophisticated (5)</a>

                                <a  data-toggle="Popover" data-placement="bottom" title="Popover Header" 
                                data-content="* Poster is prepared sufficiently in order to convey the necessary information. * Font size is acceptable for reading. * Appropriate information is included."> Competent (3)</a>
                                             

                                             
                                <a  data-toggle="Popover" data-placement="bottom" title="Popover Header" 
                                data-content="* Poster is poorly prepared or used inappropriately. * Font size is too small to be read easily. * Too much information is included. * Unimportant material is highlighted or essential information is missing."> Not Yet Competent (1)</a>
                        </div>



                        <div class="form-group{{ $errors->has('criteria_two') ? ' has-error' : '' }}">

                            <div class="col-md-4">

                                <div class="radio">
                                      <label><input type="radio" name="criteria_two" id="criteria_two" value="1" required> 1 </label>
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


                         <h4>  DEPTH OF CONTENT  </h4>

                        <div class="container">
                                <a  data-toggle="Popover" data-placement="bottom" title="Popover Header" 
                                data-content="* Poster provides an accurate and complete explanation of key concepts and theories, drawing upon the relevant literature. * Applications of theory are included to illuminate issues. * Readers gain insight."> Sophisticated (5)</a>

                                <a  data-toggle="Popover" data-placement="bottom" title="Popover Header" 
                                data-content="* For the most part, explanations of concepts and theories are accurate and complete. * Some helpful applications are included."> Competent (3)</a>
                                             

                                             
                                <a data-toggle="Popover" data-placement="bottom" title="Popover Header" 
                                data-content="* Explanations of concepts and/or theories are inaccurate or incomplete. * Little attempt is made to tie theory to practice. * Readers gain little from the presentation."> Not Yet Competent (1)</a>
                        </div>



                        <div class="form-group{{ $errors->has('criteria_three') ? ' has-error' : '' }}">

                            <div class="col-md-4">

                                <div class="radio">
                                      <label><input type="radio" name="criteria_three" id="criteria_three" value="1" required> 1 </label>
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


                        <h4> GRAMMAR AND WORD CHOICE </h4>

                        <div class="container">
                                <a  data-toggle="Popover" data-placement="bottom" title="Popover Header" 
                                data-content="* Sentences are complete, grammatically correct and flow together easily. * Words are chosen for their precise meaning."> Sophisticated (5)</a>

                                <a  data-toggle="Popover" data-placement="bottom" title="Popover Header" 
                                data-content="* For the most part, sentences are complete, grammatically correct and flow together easily. * With a few exceptions, words are chosen for their precise meaning."> Competent (3)</a>
                                             

                                             
                                <a data-toggle="Popover" data-placement="bottom" title="Popover Header" 
                                data-content="* Readers can follow the presentation, but they are distracted by some grammatical errors. * Vocabulary is somewhat limited or inappropriate."> Not Yet Competent (1)</a>
                        </div>



                        <div class="form-group{{ $errors->has('criteria_four') ? ' has-error' : '' }}">

                            <div class="col-md-4">

                                <div class="radio">
                                      <label><input type="radio" name="criteria_four" id="criteria_four" value="1" required> 1 </label>
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

                        <h4> PERSONAL APPEARANCE OF PRESENTERS </h4>

                        <div class="container">
                                <a data-toggle="Popover" data-placement="bottom" title="Popover Header" 
                                data-content="Personal appearance is completely appropriate for the occasion and the audience."> Sophisticated (5)</a>

                                <a  data-toggle="Popover" data-placement="bottom" title="Popover Header" 
                                data-content="Personal appearance is generally appropriate for the occasion and audience. * However, some aspects of appearance reflect a lack of sensitivity to nuances of the occasion or expectations of the audience."> Competent (3)</a>
                                             

                                             
                                <a data-toggle="Popover" data-placement="bottom" title="Popover Header" 
                                data-content="Personal appearance is inappropriate for the occasion and audience."> Not Yet Competent (1)</a>
                        </div>



                        <div class="form-group{{ $errors->has('criteria_five') ? ' has-error' : '' }}">

                            <div class="col-md-4">

                                <div class="radio">
                                      <label><input type="radio" name="criteria_five" id="criteria_five" value="1" required> 1 </label>
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
                                <input id="criteria_five_comment" type="textarea" class="form-control" name="criteria_five_comment" value="{{ old('criteria_five_comment') }}">

                            </div>
                        </div>

                        <h4> VERBAL INTERACTION </h4>

                        <div class="container">
                                <a data-toggle="Popover" data-placement="bottom" title="Popover Header" 
                                data-content="* Consistently clarifies, restates, and responds to questions. * Summarizes when needed."> Sophisticated (5)</a>

                                <a data-toggle="Popover" data-placement="bottom" title="Popover Header" 
                                data-content="* Generally responds to audience comments, questions and needs. * Misses some opportunities for interaction."> Competent (3)</a>
                                             

                                             
                                <a data-toggle="Popover" data-placement="bottom" title="Popover Header" 
                                data-content="Responds to questions inadequately."> Not Yet Competent (1)</a>
                        </div>



                        <div class="form-group{{ $errors->has('criteria_six') ? ' has-error' : '' }}">

                            <div class="col-md-4">

                                <div class="radio">
                                      <label><input type="radio" name="criteria_six" id="criteria_six" value="1" required> 1 </label>
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

                        

                        <hr>


                         <div class="form-group{{ $errors->has('experience') ? ' has-error' : '' }}">
                            <label for="experience" class="col-md-4 control-label">Experience </label>

                            <div class="col-md-6">
                                <input id="experience" type="textarea" class="form-control" name="experience" value="{{ old('experience') }}">

                            </div>
                        </div>


                        <hr>


                         <div class="form-group{{ $errors->has('general_comment') ? ' has-error' : '' }}">
                            <label for="general_comment" class="col-md-4 control-label">General Comment</label>

                            <div class="col-md-6">
                                <textarea class="form-control" rows="5" id="general_comment" type="textarea" class="form-control" name="general_comment"></textarea>

                            </div>
                        </div>

                        <hr>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-default">
                                    submit
                               
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