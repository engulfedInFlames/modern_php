<?php

namespace Enums;

enum Status: string
{
  case PAID = "paid";
  case PENDING = "pending";
  case DECLIEND = "declined";
}
