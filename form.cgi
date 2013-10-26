#!/usr/bin/perl
use LWP::UserAgent;
use HTML::Form;
use JSON::Syck;

print "Content-type: application/json\n\n",$ENV{REQUEST_URI} =~ /^.*?\/(https?:\/\/.*)/ ? JSON::Syck::Dump([HTML::Form->parse(LWP::UserAgent->new()->get($1))]) : undef;
