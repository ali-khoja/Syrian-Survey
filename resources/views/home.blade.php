@extends('layout')

@section('content')
<ul class="collection with-header">
    <li class="collection-header">
        <h2 class="flow-text"  style= "color:#45c4a1">Recent Surveys
            <span style="float:right;" style= "color:#45c4a1 !important">{{ link_to_route('new.survey', 'Create new') }}
            </span>
        </h2>
    </li>
    @forelse ($surveys as $survey)
      <li class="collection-item">
        <div>
            {{ link_to_route('detail.survey', $survey->title, ['id'=>$survey->id])}}
            <a href="survey/view/{{ $survey->id }}" title="Take Survey" class="secondary-content"><i class="material-icons">send</i></a>
            <a href="survey/{{ $survey->id }}" title="Edit Survey" class="secondary-content"><i class="material-icons">edit</i></a>
            <a href="survey/answers/{{ $survey->id }}" title="View Survey Answers" class="secondary-content"><i class="material-icons">textsms</i></a>
        </div>
        </li>
    @empty
        <p class="flow-text center-align" style= "color:#45c4a1"0>Nothing to show</p>
    @endforelse
    </ul>

@stop