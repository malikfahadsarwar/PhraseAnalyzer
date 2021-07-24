<!DOCTYPE html>
<html>
<head>
<style>
.grid-container {
  display: grid;
  grid-column-gap: 50px;
  grid-template-columns: auto auto auto auto auto;
  background-color: #2196F3;
  padding: 10px;
}

.grid-item {
  background-color: rgba(255, 255, 255, 0.8);
  border: 1px solid rgba(0, 0, 0, 0.8);
  padding: 10px;
  font-size: 30px;
  text-align: center;
}
</style>
</head>
<body>


<div style="text-align:center;">
  <h1 style="color:black;">The input string entered by you is <span style="color:blue;">{{$title}}</span> <h1>
</div>

<div class="grid-container">
  <div class="grid-item">Character Symbol</div>
  <div class="grid-item">Duplicate </div>
  <div class="grid-item">Before</div>  
  <div class="grid-item">After</div>  
  <div class="grid-item">Distance</div> 
 
  @foreach ($analyse as $key=>$value)
    <div class="grid-item">{{$key}}</div>
    <div class="grid-item">{{$value['repeat']}} </div>
    <div class="grid-item">{{$value['before']}}</div>  
    <div class="grid-item">{{$value['after']}}</div>
    @if($value['flag']==1)
      <div class="grid-item">Max Distance 10</div>
    @else
      <div class="grid-item"></div>
    @endif
  @endforeach
  
</div>

        

</body>
</html>
