
<!DOCTYPE html>
<html lang="en">
<head>

  <!-- Basic Page Needs
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <meta charset="utf-8">
  <title>Your page title here :)</title>
  <meta name="description" content="">
  <meta name="author" content="">

  <!-- Mobile Specific Metas
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- FONT
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <link href="//fonts.googleapis.com/css?family=Raleway:400,300,600" rel="stylesheet" type="text/css">

  <!-- CSS
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <link rel="stylesheet" href="css/normalize.css">
  <link rel="stylesheet" href="css/skeleton.css">

  <!-- Favicon
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <link rel="icon" type="image/png" href="images/favicon.png">

</head>
<body>

  <!-- Primary Page Layout
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <div class="container">

  <!-- columns should be the immediate child of a .row -->
    <div class="row">
      <div class="one column">One</div>
      <div class="eleven columns">Eleven</div>
    </div>

    <!-- just use a number and class 'column' or 'columns' -->
    <div class="row">
      <div class="two columns">Two</div>
      <div class="ten columns">Ten</div>
    </div>

    <!-- there are a few shorthand columns widths as well -->
    <div class="row">
      <div class="one-third column">1/3</div>
      <div class="two-thirds column">2/3</div>
    </div>
    <div class="row">
      <div class="one-half column">1/2</div>
      <div class="one-half column">1/2</div>
    </div>

    <!-- Standard Headings -->
<h1>Heading</h1>
<h2>Heading</h2>
<h3>Heading</h3>
<h4>Heading</h4>
<h5>Heading</h5>
<h6>Heading</h6>

<!-- Base type size -->
<p>The base type is 15px over 1.6 line height (24px)</p>

<!-- Other styled text tags -->
<strong>Bolded</strong>
<em>Italicized</em>
<a>Colored</a>
<u>Underlined</u>

<!-- Standard buttons -->
<a class="button" href="#">Anchor button</a>
<button>Three button elements</button>
<input type="submit" value="submit input">
<input type="button" value="button input">
<input type="button" value="button input">

<!-- Primary buttons -->
<a class="button button-primary" href="#">Anchor button</a>
<button class="button-primary">Button elements</button>
<input class="button-primary" type="submit" value="submit input">
<input class="button-primary" type="button" value="button input">

<!-- The above form looks like this -->
<form>
  <div class="row">
    <div class="six columns">
      <label for="exampleEmailInput">Your email</label>
      <input class="u-full-width" type="email" placeholder="test@mailbox.com" id="exampleEmailInput">
    </div>
    <div class="six columns">
      <label for="exampleRecipientInput">Reason for contacting</label>
      <select class="u-full-width" id="exampleRecipientInput">
        <option value="Option 1">Questions</option>
        <option value="Option 2">Admiration</option>
        <option value="Option 3">Can I get your number?</option>
      </select>
    </div>
  </div>
  <label for="exampleMessage">Message</label>
  <textarea class="u-full-width" placeholder="Hi Dave …" id="exampleMessage"></textarea>
  <label class="example-send-yourself-copy">
    <input type="checkbox">
    <span class="label-body">Send a copy to yourself</span>
  </label>
  <input class="button-primary" type="submit" value="Submit">
</form>

<!-- Always wrap checkbox and radio inputs in a label and use a <span class="label-body"> inside of it -->

<!-- Note: The class .u-full-width is just a utility class shorthand for width: 100% -->

<ul>
  <li>Item 1</li>
  <li>
    Item 2
    <ul>
      <li>Item 2.1</li>
      <li>Item 2.2</li>
    </ul>
  </li>
  <li>Item 3</li>
</ul>

<!-- Easily substitute any <ul> or an <ol> to get number lists or sublists. Skeleton doesn't support lists nested deeper than 2 levels -->

<pre><code>.some-class {
  background-color: red;
}</code></pre>

<!-- Remember every whitespace and break will be preserved in a <pre>, including indentation in your code -->

<table class="u-full-width">
  <thead>
    <tr>
      <th>Name</th>
      <th>Age</th>
      <th>Sex</th>
      <th>Location</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>Dave Gamache</td>
      <td>26</td>
      <td>Male</td>
      <td>San Francisco</td>
    </tr>
    <tr>
      <td>Dwayne Johnson</td>
      <td>42</td>
      <td>Male</td>
      <td>Hayward</td>
    </tr>
  </tbody>
</table>

<table class="u-full-width">
  <thead>
    <tr>
      <th>Name</th>
      <th>Age</th>
      <th>Sex</th>
      <th>Location</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>Dave Gamache</td>
      <td>26</td>
      <td>Male</td>
      <td>San Francisco</td>
    </tr>
    <tr>
      <td>Dwayne Johnson</td>
      <td>42</td>
      <td>Male</td>
      <td>Hayward</td>
    </tr>
  </tbody>
</table>

  </div>

<!-- End Document
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
</body>
</html>
