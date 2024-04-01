<style>
/* 
Import the desired font from Google fonts. 
*/
@import url('https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600;700&display=swap');

/* 
Define all colors used in this template 
*/
:root{
  --font-color: black;
  --highlight-color: #60D0E4;
  --header-bg-color: #B8E6F1;
  --footer-bg-color: #BFC0C3;
  --table-row-separator-color: #BFC0C3;
}

@page{
  /*
  This CSS highlights how page sizes, margins, and margin boxes are set.
  https://docraptor.com/documentation/article/1067959-size-dimensions-orientation

  Within the page margin boxes content from running elements is used instead of a 
  standard content string. The name which is passed in the element() function can
  be found in the CSS code below in a position property and is defined there by 
  the running() function.
  */
  size:A4;
  margin:8cm 0 3cm 0;

  @top-left{
  	content:element(header);
  }

  @bottom-left{
  	content:element(footer);
  }
}

/* 
The body itself has no margin but a padding top & bottom 1cm and left & right 2cm.
Additionally the default font family, size and color for the document is defined
here.
*/
body{
  margin:0;
  padding:1cm 2cm;
  color:var(--font-color);
  font-family: 'Montserrat', sans-serif;
  font-size:10pt;
}

/*
The links in the document should not be highlighted by an different color and underline
instead we use the color value inherit to get the current texts color.
*/
a{
  color:inherit;
  text-decoration:none;
}

/*
For the dividers in the document we use an HR element with a margin top and bottom 
of 1cm, no height and only a border top of one millimeter.
*/
hr{
  margin:1cm 0;
  height:0;
  border:0;
  border-top:1mm solid var(--highlight-color);
}

/*
The page header in our document uses the HTML HEADER element, we define a height 
of 8cm matching the margin top of the page (see @page rule) and a padding left
and right of 2cm. We did not give the page itself a margin of 2cm to ensure that
the background color goes to the edges of the document.

As mentioned above in the comment for the @page the position property with the 
value running(header) makes this HTML element float into the top left page margin
box. This page margin box repeats on every page in case we would have a multi-page
estimate.
*/
header{
  height:8cm;
  padding:0 2cm;
  position:running(header);
  background-color:var(--header-bg-color);
}

/*
For the different sections in the header we use some flexbox and keep space between
with the justify-content property.
*/
header .headerSection{
  display:flex;
  justify-content:space-between;
}

/*
To move the first sections a little down and have more space between the top of 
the document and the logo/company name we give the section a padding top of 5mm.
*/
header .headerSection:first-child{
  padding-top:.5cm;
}

/*
Similar we keep some space at the bottom of the header with the padding-bottom
property.
*/
header .headerSection:last-child{
  padding-bottom:.5cm;
}

/*
Within the header sections we have defined two DIV elements, and the last one in
each headerSection element should only take 35% of the headers width.
*/
header .headerSection div:last-child{
  width:35%;
}

/*
For the logo, where we use an SVG image and the company text we also use flexbox
to align them correctly.
*/
header .logoAndName{
  display:flex;
  align-items:center;
  justify-content:space-between;
}

/*
The SVG gets set to a fixed size and get 5mm margin right to keep some distance
to the company name.
*/
header .logoAndName svg{
  width:1.5cm;
  height:1.5cm;
  margin-right:.5cm;
}

/*
To ensure the top right section "ESTIMATE" starts on the same level as the Logo &
Name we set a padding top of 1cm for this element.
*/
header .headerSection .estimateDetails{
  padding-top:1cm;
}

/*
In the second row of header sections, we find the "ISSUED TO" area where we also
make use of flexbox to achive the desired layout.
*/
header .headerSection .issuedTo{
  display:flex;
  justify-content:space-between;
}

/*
The H3 element "ISSUED TO" gets another 25mm margin to the right to keep some 
space between this header and the client's address.
Additionally this header text gets the hightlight color as font color.
*/
header .headerSection .issuedTo h3{
  margin:0 .75cm 0 0;
  color:var(--highlight-color);
}

/*
The paragraphs within the header sections DIV elements get a small 2px margin top
to ensure its in line with the "ISSUED TO" header text.
*/
header .headerSection div p{
  margin-top:2px;
}

/*
All header elements and paragraphs within the HTML HEADER tag get a margin of 0.
*/
header h1,
header h2,
header h3,
header p{
  margin:0;
}

/*
Heading of level 2 and 3 ("ESTIMATE" and "ISSUED TO") need to be written in 
uppercase, so we use the text-transform property for that.
*/
header h2,
header h3{
  text-transform:uppercase;
}

/*
The divider in the HEADER element gets a slightly different margin than the 
standard dividers.
*/
header hr{
  margin:1cm 0 .5cm 0;
}

/*
Our main content is all within the HTML MAIN element. In this template this are
two tables. The one which lists all items and the table which shows us the 
subtotal, tax and total amount.

Both tables get the full width and collapse the border.
*/
main table{
  width:100%;
  border-collapse:collapse;
}

/*
We put the first tables headers in a THEAD element, this way they repeat on the
next page if our table overflows to multiple pages.

The text color gets set to the highlight color.
*/
main table thead th{
  height:1cm;
  color:var(--highlight-color);
}

/*
For the last three columns we set a fixed width of 2.5cm, so if we would change
the documents size only the first column with the item name and description grows.
*/
main table thead th:nth-of-type(2),
main table thead th:nth-of-type(3),
main table thead th:last-of-type{
  width:2.5cm;
}

/*
The items itself are all with the TBODY element, each cell gets a padding top
and bottom of 2mm and a border bottom of .5mm as a row separator.
*/
main table tbody td{
  padding:1mm 10mm;
  border-bottom:0.5mm solid var(--table-row-separator-color);
}

/*
The cells in the last column (in this template the column containing the total)
get a text align right so the text is at the end of the table.
*/
main table thead th:last-of-type,
main table tbody td:last-of-type{
  text-align:left;
}

/*
By default text within TH elements is aligned in the center, we do not want that
so we overwrite it with an left alignment.
*/
main table th{
  text-align:left;
}

/*
The summary table, so the table containing the subtotal, tax and total amount 
gets a width of 40% + 2cm. The plus 2cm is added because our body has a 2cm padding
but we want our highlight color for the total row to go to the edge of the document.

To move the table to the right side we simply set a margin-left of 60%.
*/
main table.summary{
  width:calc(40% + 2cm);
  margin-left:60%;
  margin-top:.5cm;
}

/*
The row containing the total amount gets its background color set to the highlight 
color and the font weight to bold.
*/
main table.summary tr.total{
  font-weight:bold;
  background-color:var(--highlight-color);
}

/*
The TH elements of the summary table are not on top but the cells on the left side
these get a padding left of 1cm to give the highlight color some space.
*/
main table.summary th{
  padding:4mm 0 4mm 1cm;
  border-bottom:0;
}

/*
As only the highlight background color should go to the edge of the document
but the text should still have the 2cm distance, we set the padding right to 
2cm.
*/
main table.summary td{
  padding:4mm 2cm 4mm 0;
  border-bottom:0;
}

/*
The content below the tables is placed in a ASIDE element next to the MAIN element.
To ensure this element is always at the bottom of the page, just above the page 
footer, we use the Prince custom property "-prince-float" with the value bottom.

See Page Floats on https://www.princexml.com/howcome/2021/guides/float/.
*/
aside{
  -prince-float: bottom;
  padding:0 2cm .5cm 2cm;
}

/*
The content itself is shown in 2 columns.
*/
aside p{
  margin:0;
  column-count:2;
}

/*
The page footer in our document uses the HTML FOOTER element, we define a height 
of 3cm matching the margin bottom of the page (see @page rule) and a padding left
and right of 2cm. We did not give the page itself a margin of 2cm to ensure that
the background color goes to the edges of the document.

As mentioned above in the comment for the @page the position property with the 
value running(footer) makes this HTML element float into the bottom left page margin
box. This page margin box repeats on every page in case we would have a multi-page
estimate.

The content inside the footer is aligned with the help of line-height 3cm and a 
flexbox for the child elements.
*/
footer{
  height:3cm;
  line-height:3cm;
  padding:0 2cm;
  position:running(footer);
  background-color:var(--footer-bg-color);
  font-size:8pt;
  display:flex;
  align-items:baseline;
  justify-content:space-between;
}

/*
The first link in the footer, which points to the company website is highlighted 
in bold.
*/
footer a:first-child{
  font-weight:bold;
}

</style>
<!-- The header element will appear on the top of each page of this estimate document. -->
<header>
  <div class="headerSection">
    <!-- As a logo we take an SVG element and add the name in an standard H1 element behind it. -->
    <div class="logoAndName">
      <svg>
        <circle cx="50%" cy="50%" r="40%" stroke="black" stroke-width="3" fill="black" />
      </svg>
      <h1>ADMIN ADMIN</h1>
    </div>
    <!-- Details about the estimation are on the right top side of each page. -->
    <div>
      <p>
        <b>Date</b> 05/10/2021
      </p>
    </div>
  </div>
  <!-- The two header rows are divided by an blue line, we use the HR element for this. -->
  <hr />
</header>

<!-- The footer contains the company's website and address. To align the address details we will use flexbox in the CSS style. -->
<footer>
    <span>
      123 Alphabet Road, Suite 01, Indianapolis, IN 46260
    </span>
</footer>

<!-- In the main section the table for the separate items is added. Also we add another table for the summary, so subtotal, tax and total amount. -->
<main>
  <table>
    <!-- A THEAD element is used to ensure the header of the table is repeated if it consumes more than one page. -->
    <thead>
      <tr>
        <th>NOM</th>
        <th>FILIERE</th>
        <th>OPTION</th>
        <th>NUM. CARTE</th>
        <th>STATUS</th>
      </tr>
    </thead>
    <!-- The single estimate items are all within the TBODY of the table. -->
    <tbody>
        @foreach ($inscriptions as $insc )    
        <tr>
          <td>
            {{$insc->stagiaire->nom_stagiaire}}
          </td>
          <td>
          {{$insc->filiere->nom_filiere}}
          </td>
          <td>
          {{$insc->option->nom_option}}
          </td>
          <td>
          {{$insc->stagiaire->num_carte_stag}}
          </td>
          <td>
          {{$insc->stagiaire->status_stag}}
          </td>
        </tr>
        @endforeach
    </tbody>
  </table>
</main>