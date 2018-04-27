<?php
namespace Edu\Cnm\cmarquez69\DataDesign;

require_once("autoload.php");
require_once (dirname(__DIR__, 2)) . "/classes/autoload.php");

use Edu\Cnm\DataDesign\ValidateUuid;use Ramsey\Uuid\Uuid;

class pick implements \JsonSerializable {
	use ValidateUuid;
	/**
	 * id for the pick product id
	 * @var Uuid $pickProductId
	**/
	private $pickProductId;
	/**
	 * id for the pick profile id
	 * @var string $pickProfileId
	**/
	private $pickProfileId;
}
/**
 *constructor for pick
 *
**/
public function __construct(string $newPickProductId, string $newPickProfileId) {
	try {
		$this->setPickProductId($newPickProductId);
		$this->setPickProfileId($newPickProfileId);
		}
	catch(\InvalidArgumentException | \RangeException | \Exception |\TypeError $exception) {
		$exceptionType = get_class($exception);
		throw(new $exceptionType($exceptionType($exception->getMessage(), 0, $exception));
	}
}
/**
 * accessor method for pick product id
 * @return Uuid|string $pickProductId
**/
public function getPickProductId(): Uuid {
	return $this->pickProductId;
}
/**
 * mutator method for pick product id
 * @param Uuid|string $pickProductId
**/
public function setPickProductId(Uuid $pickProductId) {
	$this->pickProductId = $pickProductId;
}
/**
 * accessor method for pick profile id
 * @return string $pickProfileId
**/
public function getPickProfileId(): string {
	return $this->pickProfileId;
}
/** mutator method for pick profile id
 * @param string $pickProfileId
**/
public function setPickProfileId(string $pickProfileId) {
	$this->pickProfileId = $pickProfileId;
}

/**
 *deletes this pick from mySQL
 *
**/
public function delete(\PDO $pdo): void {

	$query = "DELETE FROM pick WHERE pickProductId = :pickProductId AND pickProfileId = :pickProfileId";
	$statement = $pdo->prepare($query);

	$parameters = ["pickProductId" => $this->pickProductId->getBytes(), "pickProfileId" => $this->pickProfileId->getBytes()];
	$statement->execute($parameters);
}

public function jsonSerialize(): array {
	$fields = get_object_vars($this);

	$fields["pickProductId"] = $this->pickProductId->toString;
	$fields["pickProfileId"] = $this->pickProfileId->toString;
	return (fields);
}