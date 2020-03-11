<?hh // strict

namespace Hack\UserDocumentation\Fundamentals\Constants\Examples\DefiningConstants;

const int MAX_COUNT = 123;
class C {
  const float MAX_HEIGHT = 10.5;
  const float UPPER_LIMIT = C::MAX_HEIGHT;
}

<<__EntryPoint>>
function main(): void {
  echo "MAX_COUNT = ".MAX_COUNT."\n";
  echo "MAX_HEIGHT = ".C::MAX_HEIGHT."\n";
}
