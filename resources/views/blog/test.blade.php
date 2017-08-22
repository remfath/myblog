@extends('layouts.blog')

@section('styles')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/simplemde/latest/simplemde.min.css">
@endsection

@section('content')
    <h1>Editor</h1>
    <textarea name="ide" id="ide" cols="30" rows="10"></textarea>
    <button onclick="getContent()">Get</button>
    <button onclick="setContent()">Set</button>
@endsection

@section('scripts')
    <script src="https://cdn.jsdelivr.net/simplemde/latest/simplemde.min.js"></script>
    <script>
        const simpleMDE = new SimpleMDE(
            {
                element: document.getElementById("ide")
            }
        );

        function getContent() {
            console.log(simpleMDE.htmlText());
        }

        function setContent() {
            simpleMDE.value("hello world.");
        }
    </script>
@endsection