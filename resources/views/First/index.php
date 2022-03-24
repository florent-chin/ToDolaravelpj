<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>!ToDo!</title>
  <style>
    html,
    body,
    div,
    span,
    object,
    iframe,
    h1,
    h2,
    h3,
    h4,
    h5,
    h6,
    p,
    blockquote,
    pre,
    abbr,
    address,
    cite,
    code,
    del,
    dfn,
    em,
    img,
    ins,
    kbd,
    q,
    samp,
    small,
    strong,
    sub,
    sup,
    var,
    b,
    i,
    dl,
    dt,
    dd,
    ol,
    ul,
    li,
    fieldset,
    form,
    label,
    legend,
    table,
    caption,
    tbody,
    tfoot,
    thead,
    tr,
    th,
    td,
    article,
    aside,
    canvas,
    details,
    figcaption,
    figure,
    footer,
    header,
    hgroup,
    menu,
    nav,
    section,
    summary,
    time,
    mark,
    audio,
    video {
      margin: 0;
      padding: 0;
      border: 0;
      outline: 0;
      font-size: 100%;
      vertical-align: baseline;
      background: transparent;
    }

    body {
      line-height: 1;

    }

    article,
    aside,
    details,
    figcaption,
    figure,
    footer,
    header,
    hgroup,
    menu,
    nav,
    section {
      display: block;
    }

    nav ul {
      list-style: none;
    }

    blockquote,
    q {
      quotes: none;
    }

    blockquote:before,
    blockquote:after,
    q:before,
    q:after {
      content: '';
      content: none;
    }

    a {
      margin: 0;
      padding: 0;
      font-size: 100%;
      vertical-align: baseline;
      background: transparent;
    }

    ins {
      background-color: #ff9;
      color: #000;

      text-decoration: none;
    }

    mark {
      background-color: #ff9;
      color: #000;
      font-style: italic;
      font-weight: bold;
    }

    del {
      text-decoration: line-through;
    }

    abbr[title],
    dfn[title] {
      border-bottom: 1px dotted;
      cursor: help;
    }

    table {
      border-collapse: collapse;
      border-spacing: 0;
    }

    hr {
      display: block;
      height: 1px;
      border: 0;
      border-top: 1px solid #cccccc;
      margin: 1em 0;
      padding: 0;
    }

    input,
    select {
      vertical-align: middle;
    }

    .header {
      height: 80px;
      margin: 0 auto;
      width: 100%;
      text-align: center;
      background-color: #FFEEFF;
    }

    .header h1 {
      color: #9966CC;
      font-size: 36px;
      font-weight: bold;
      font-style: italic;
      padding: 22px;
    }



    h1 {
      font-size: 60px;
      margin: 0px;
      padding: 0px;
    }

    h3 {
      margin: 0px;
      padding: 0px;
      color: #999;
    }

    .wrap {
      width: 650px;
      position: absolute;
      top: 50%;
      left: 50%;
      transform: translate(-50%, -50%);
      vertical-align: middle;
      border: 3px solid teal;
    }

    .fname {
      position: relative;
      margin: 20px auto;
      width: 70%;
    }

    label {
      position: absolute;
      top: 0;
      font-size: 20px;
      margin: 10px;
      padding: 0 10px;
      -webkit-transition: top .2s ease-in-out,
        font-size .2s ease-in-out;
      transition: top .2s ease-in-out,
        font-size .2s ease-in-out;
      color: teal;
    }

    .active {
      top: -30px;
      left: -20px;
      font-size: 20px;
    }

    input[type=text] {
      width: 100%;
      padding: 10px;
      border: 3px solid teal;
      font-size: 15px;
      color: black;
    }

    /*.frame {
      border: 3px solid teal;
    }

    .wrap textarea {
      border: 3px solid teal;
      font-size: 20px;
      color: black;
    }*/

    .cool:focus {
      outline: none;
    }
  </style>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
</head>

<body>
  <div class="header">
    <h1>!ToDo!</h1>
  </div>
  <div class="wrap">
    <div class="fname">
      <label for="fname">Title</label>
      <input id="fname" type="text" class="cool" width="70px" />
    </div>
    <!--<div class="frame">
      <div>
        <label for="lname">説明</label>
        <textarea id="lname" cols="30" rows="10" class="cool"></textarea>
      </div>
    </div>-->
  </div>

  <script>
    $('input').on('focusin', function() {
      $(this).parent().find('label').addClass('active');
    });

    $('input').on('focusout', function() {
      if (!this.value) {
        $(this).parent().find('label').removeClass('active');
      }
    });

    $('textarea').on('focusin', function() {
      $(this).parent().find('label').addClass('active');
    });

    $('textarea').on('focusout', function() {
      if (!this.value) {
        $(this).parent().find('label').removeClass('active');
      }
    });
  </script>
</body>

</html>
