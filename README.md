# Tempgen
Not sure how we got this far with so many different web frameworks and still don't have some kind of generator. WordPress takes a lot of the automation for many people. However, it can be a pain in the ass for quick freelance projects to setup a new WordPress or crank out a WordPress template for a specific framework. This script will take user input and return basic template/layout file(s). Why? Because it's easier for freelancing. Maybe there is already something like this out there and I just don't use it, see it, or probably didn't even look for it.

## Generate Web Layouts
The layouts all contain the default (supported) components unless otherwise specified in the Tempgen script file.

## Tempgen Scripts
You can create JSON formatted files that Tempgen will read and then create a layout file. If you want generic default components then don't supply any settings (as shown below) for the component.

Example of a Bulma layout that has a default **navbar** and a default **hero** component.
```
{
  "Template": {
    "framework": "bulma"
  },
  "coms": {
    "navbar": {},
    "hero": {}
  }
}
```

## Features
* [Normalize CSS](https://necolas.github.io/normalize.css/)

## Supported Frameworks
* Bulma

## Framework Docs
* https://bulma.io/documentation
* https://getbootstrap.com/docs/5.0/
* http://juicedcss.com/bower_components/juiced/docs/

#### Frameworks Coming Soon?
* Bootstrap
* Juiced

### Links and Shouts
* https://html5boilerplate.com/
