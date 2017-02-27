<?php if(!defined('KIRBY')) exit ?>

title: Comment
pages: false
files: false
icon: comment
fields:
  name:
    label: Name
    type: text
    required: true
    width: 1/2
    icon: user
  date:
    label: Date
    type: datetime
    width: 1/2
    validate:
      date
  email:
    label: Email Address
    type: email
    width: 1/2
    validate:
      email
  url:
    label: Website Address
    type: url
    width: 1/2
  text:
    label: Text
    required: true
    type: textarea