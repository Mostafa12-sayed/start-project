@import url('http://fonts.cdnfonts.com/css/bruno-ace');

body{
    width: 100%;
    height: 1vh;
    margin: 0 auto;
    padding: 0 auto;
    font-family: 'raleway';
    background-color: #ffffff;
}
ul{
    list-style: none;
}
li{
    display: inline-block;
}
a{
    color: inherit;
    text-decoration: none;
}
script{
    display: none;
}
/*           HEADER              */
.header{
    display: grid;
    grid-template-columns: repeat(2,50%);
    height: 80px;
    width: 100%;
    border-bottom: 1px solid black;
}
    /* LOGO */
.header > .logo{
    display: flex;
    align-self: center;
    align-items: center;
    padding: 0px 0px 0px 40px;
    grid-column: 1/2;
}
.header > .logo > img{
    height: 65px;
}
.header > .logo > h2{
    display: inline-block;
    font-family: 'Bruno Ace', sans-serif;
}
    /* NAV BAR */
.header > .navbar{
    display: flex;
    justify-self: end;
    align-self: center;
    align-items: center;
    padding: 0px 60px 0px 0px;
    grid-column: 2/3;
}
.header > .navbar > ul > li{
    font-size: 25px;
    color: #FF5500;
    padding: 0px 10px 0px 10px;
}
.header > .navbar > ul > li.signup{
    color: #FF3D00;
}
/*             MAIN BODY                */
.mainBody{
    display: flex;
    align-items: center;
    justify-items: center;
    height: 1000px;
    width: 100%;
}
.mainBody > .loginform{
    position: relative;
    width: 40%;
    margin: 0 auto;
    padding: 50px 45px;
    border: 1px solid black;
    border-radius: 10px;
}
.mainBody > .loginform::before{
    position: absolute;
    content: " ";
    top: -40px;
    left: calc(50% - 40px);
    width: 80px;
    height: 80px;
    padding: 5px;
    background-color: white;
    background-image: url(../images/formLogo.png);
    background-repeat: no-repeat;
    background-position: center;
    background-size: contain;
    background-origin: content-box;
    border: 1px solid #777777;
    border-radius: 50%;
}

.mainBody > .loginform > label{
    font-size: 23px;
    width:40%;
    margin: 20px 0px;
    color: #FF5500;

}

.mainBody > .loginform > label > input
{
    width: 100%;
    margin: 20px 0px;
    height: 35px;

}
.mainBody > .loginform > input{
    width: 100%;
    height: 35px;
    border-radius: 2px;
    margin: 20px 0px;
}
.mainBody > .loginform > input[type="text"]{
    padding: 18px 10px;

    border: 1px solid #777777b2;
}
.mainBody > .loginform > input[type="text"]::placeholder,.mainBody > .loginform > .password > input::placeholder{
    font-size: 15px;
    color: #6F6F6F;
}
.mainBody > .loginform > input[type="submit"]{
    font-size: 20px;
    height: 40px;
    color: white;
    background-color: #FD8042;
    border: none;
    margin-bottom: 0px;
    border-radius: 7px;
}
.mainBody > .loginform > input[type="submit"]:hover{
    background-color: #fda071;
}
.mainBody > .loginform > p{
    padding: 15px 0px 0px 2px;
    font-size: 15px;
}
.mainBody > .loginform > p > a{
    color: #FF3D00;
}
.mainBody > .loginform > .password > input{
    width: 100%;
    height: 100%;
    padding: 18px 10px;
    border: 1px solid #777777b2;
    border-radius: 2px;

}
.password{
    position: relative;
    margin: 20px 0px;
    width: 100%;
    height: 35px;
    border-radius: 2px;
}
.privacy{
    position: absolute;
    top: calc(50% - 13px);
    right: 5px;
    width: 20px;
    height: 20px;
    padding: 5px;
    cursor: pointer;
    background-color: white;
    background-repeat: no-repeat;
    background-position: center;
    background-size: contain;
    background-origin: content-box;
}
.private{
    background-image: url(../images/Privacy/private.png);
}
.public{
    background-image: url(../images/Privacy/public.png);
}
/*          FOOTER              */
footer{
    height: 200px;
    background-color: #D15A1F;
    margin-top: 40px;
    padding-bottom: 10px;

    display: grid;
    grid-template-columns: repeat(3,1fr);
    place-items: center;
}
footer h2, footer span{
    color: white;
}
footer h2{
    font-size: 30px;
}
    /* LOGO */
footer > .logoCol{
    grid-column: 1/2;
}
footer > .logoCol > img{
    width: 170px;
}
    /* FOLLOW COLUMN */
footer > .followCol{
    grid-column: 2/3;
}

footer > .followCol img{
    width: 45px;
    margin-right: 30px;
}

    /* ABOUT COLUMN */
footer > .aboutCol{
    grid-column: 3/4;
}
footer > .aboutCol > p{
    margin: 6px;
}
#alrt{
    font-size: 17px;

    color: #842029;
    background-color: #f8d7da;
    border-color: #f5c2c7;
}

@import url("https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,700");

$base-spacing-unit: 24px;
$half-spacing-unit: $base-spacing-unit / 2;

$color-alpha: #1772ff;
$color-form-highlight: #eeeeee;

*,
*:before,
*:after {
    box-sizing: border-box;
}

body {
    padding: $base-spacing-unit;
    font-family: "Source Sans Pro", sans-serif;
    margin: 0;
}

h1,
h2,
h3,
h4,
h5,
h6 {
    margin: 0;
}

.container {
    max-width: 1000px;
    margin-right: auto;
    margin-left: auto;
    display: flex;
    justify-content: center;
    align-items: center;
    min-height: 100vh;
}

.table {
    width: 100%;
    border: 1px solid $color-form-highlight;
}

.table-header {
    display: flex;
    width: 100%;
    background: #000;
    padding: ($half-spacing-unit * 1.5) 0;
}

.table-row {
    display: flex;
    width: 100%;
    padding: ($half-spacing-unit * 1.5) 0;

    &:nth-of-type(odd) {
        background: $color-form-highlight;
    }
}

.table-data,
.header__item {
    flex: 1 1 20%;
    text-align: center;
}

.header__item {
    text-transform: uppercase;
}

.filter__link {
    color: white;
    text-decoration: none;
    position: relative;
    display: inline-block;
    padding-left: $base-spacing-unit;
    padding-right: $base-spacing-unit;

    &::after {
        content: "";
        position: absolute;
        right: -($half-spacing-unit * 1.5);
        color: white;
        font-size: $half-spacing-unit;
        top: 50%;
        transform: translateY(-50%);
    }

    &.desc::after {
        content: "(desc)";
    }

    &.asc::after {
        content: "(asc)";
    }
}
