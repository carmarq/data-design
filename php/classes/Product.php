<?php
namespace Edu\Cnm\cmarquez69\DataDesign;

require_once("Autoload.php");
require_once (dirname(__DIR__, 2)) . "/classes/Autoload.php");

use Ramsey\Uuid\Uuid;
/**
 * @author Carlos Marquez <carl.marq95@gmail.com>
 * @version 0.0.1
 **/

		class Product implements \JsonSerializable {
			use ValidateUuid;
		}
		/**
		 *id for this profile; this is the primary key
		 *@var $productId
		**/
		private $productId;
		/**
		 * Facts about this product
		 *@var string $productFacts
		**/
		private $productFacts;
		/**
		 * Hash for product
		 *@var string $productHash
		**/
		private $productHash;
		/**
		 *History of this product
		 *@var string $productHistory
		**/
		private $productHistory;
		/**
		 *Name of this product
		 *@var string $productName
		**/
		private $productName;
		/**
		 *Price for this product
		 *@var string $productPrice
		**/
		private $productPrice;
		/**
		 *Variations of products
		 *@var string $productVariations
		**/
		private $productVariations;
		/**
		 * Varieties of products
		 *@var string $productVariety
		**/
		private $productVariety;
		/**
		 * constructor for this product
		 * @param string|Uuid $newProductId id for this profile or null if a new profile
		 * @param string $newProductFacts string containing factual data about product
		 * @param string $newProductHash string containing hash data
		 * @param string $newProductHistory string containing history about product
		 * @param string $newProductName string with name of product
		 * @param string $newProductPrice string with price of product
		 * @param string $newProductVariations string with variations of products
		 * @param string $newProductVariety string with varieties of products
		 * @throws \InvalidArgumentException if data types are not valid
		 * @throws \RangeException if data values are out of bounds
		 * @throws \TypeError if data types violate type hints
		 * @throws \Exception if some other exception occurs
		 **/
		public function __ construct($newProductId, $newProductFacts, $newProductHash, $newProductHistory, $newProductName, $newProductPrice, $newProductVariations, $newProductVariety)
					try {
							$this->setProductId($newProductId);
							$this->setProductFacts($newProductFacts);
							$this->setProductHash($newProductHash);
							$this->setProductHistory($newProductHistory);
							$this->setProductName($newProductName);
							$this->setProductPrice($newProductPrice);
							$this->setProductVariations($newProductVariations);
							$this->setProductVariety($newProductVariety);
					}
							//determine what exception type was thrown
					catch(\InvalidArgumentException | \RangeException | \Exception | \TypeError $exception) {
								$exceptionType = get_class($exception);
								throw(new $exceptionType($exception->getMessage(), 0, $exception);
					}
		}


/**
 * accessor method for product id
 * @return Uuid value for product id
**/
public function getProductId() : Uuid {
		return($this->productId);
}

/**
 * mutator method for product id
 *
 * @param Uuid|String $newProductId
**/
public function setProductId($newProductId) : void {
	try {
			$uuid = self::validateUuid($newProductId);
	} catch(\InvalidArgumentException | \RangeException | \Exception | \TypeError $exception) {
			$exceptionType = get_class($exception);
			throw(new $exceptionType($exception->getMessage(), 0, $exception));
	}

	$this->productId = $uuid;
}

/**
 * accessor method for product facts
 *
 * @return Uuid value of product facts
**/
public function getProductsFacts() : string {
	return($this->productFacts);
}
/**
 *mutator method for product facts
 *
 * @param string $newProductFacts
 * @throws \InvalidArgumentException
 **/
public function setProductFacts(string $newProductFacts) : void {
			$newProductFacts = trim($newProductFacts);
			$newProductFacts = filter_var($newProductFacts, FILTER_SANITIZE_STRING, FILTER_FLAG_NO_ENCODE_QUOTES);
	if(empty($newProductFacts) === true) {
			throw(new \InvalidArgumentException("profile fact is empty or insecure"));
	}
	if(strlen($newProfileFacts) > 128){
		throw(new\RangeException("fact character limit has been exceeded"));
	}
		$this->profileFacts = $newProductFacts;
}
/**
 * accessor method for product hash
 * @return string value for product hash
**/
public function getProductHash(): string {
		return $this->profileHash;

}
/**
 * mutator method for product hash
 *
 * @throws \InvalidArgumentException if $newProductHash is not a valid object or a string
 * @throws \InvalidArgumentException if $newProductHash is in hexadecimal
 * @throws \RangeException if $newProductHash is more than 128 characters
**/
public function setProfileHash(string $newProfileHash): void {
	$newProfileHash = trim($newProfileHash);
	$newProfileHash = strtolower($newProfileHash);
	if(empty($newProfileHash) === true) {
		throw(new \InvalidArgumentException("profile password hash empty or insecure"));
	}
	if(!ctype_xdigit($newProfileHash)) {
		throw(new \InvalidArgumentException("profile password hash empty or insecure"));
	}
	if(strlen($newProfileHash) !== 128) {
		throw(new \RangeException("profile hash must be 128 characters"));
	}
	$this->profileHash = $newProfileHash;
}
/**
 * accessor for product history
 * @return string containing history about product
**/
public function getProductHistory(): string {
	return $this->productHistory;
}
/**
 *mutator method for product history
**/
public function setProductHistory(string $newProductHistory): void {
	$newProductHistory = trim($newProductHistory);
	$newProductHistory = filter_var($newProductHistory, FILTER_SANITIZE_STRING, FILTER_FLAG_NO_ENCODE_QUOTES);
	if(empty($newProductHistory) === true) {
		throw(new \InvalidArgumentException("product history is empty or insecure"));
	}
	if(strlen($newProductHistory) > 128) {
		throw(new\RangeException("history character limit has been exceeded"));
	}
	$this->productHistory = $newProductHistory;
}
/**
 * accessor method for product name of product
 * @return string containing product names
**/
public function getProductName(): string {
	return $this->productName;
}
/**
 * mutator method for productName
 *
**/
public function setProductName(string $newProductName) : void {
	$newProductHistory = trim($newProductHistory);
	$newProductName = filter_var($newProductName,FILTER_SANITIZE_STRING, FILTER_FLAG_NO_ENCODE_QUOTES);
	if(empty($newProductName) === true) {
		throw(new \InvalidArgumentException("product name is empty or insecure"));
	}
	if(strlen($newProductName > 128) {
		throw(\newRangeException("name character limit has been exceeded"));
	}
	$this->productName = $newProductName;
}
/**
 * accessor method for product price
 * @return string containing the price of products
**/
public function getProductPrice(): string {
	return $this->productPrice;
}
/**
 * mutator method for product price
 *
**/
public function setProductPrice(string $newProductPrice) : void {
	$newProductPrice = trim($newProductPrice);
	$newProductPrice = filter_var($newProductPrice, FILTER_SANITIZE_STRING., FILTER_FLAG_NO_ENCODE_QUOTES);
	if(empty($newProductPrice) === true) {
		throw(new \InvalidArgumentException("product price character limit has been exceeded"));
	}
	if(strlen($newProductPrice) >32) {
		throw(new\RangeException("product price has exceeded character limit"));
	}
	$this->productPrice = $newProductPrice;
}
/**
 * accessor method for product variations
 * @return string containing information about variations of products
**/
public function getProductVariations(): string {
	return $this->productVariations;
}
/**
 * mutator method for product variations
 *
**/
public function setProductVariations(string $newProductVariations) : void {
	$newProductVariations = trim($newProductVariations);
	$newProductVariations = filter_var($newProductVariations, FILTER_SANITIZE_STRING, FILTER_FLAG_NO_ENCODE_QUOTES);
	if(empty($newProductVariations) === true) {
		throw(new\InvalidArgumentException("product variation description has exceeded its character limit"));
		}
	if(strlen($newProductVariations) > 128) {
		throw(new\RangeException("product variation description has exceeded its character limit"));
		}
	$this->productVariations = $newProductVariations;
	}
/**
 * accessor method for product varieties
 * @return string containing information about product varieties
**/
public function getProductVariety (): string {
	return $this->productVariety;
}
/**
 * mutator method for product varieties
 *
**/
public function setProductVariety($sting $newProductVariety) : void {
	$newProductVariety = trim($newProductVariety;
	$newProductVariety = filter_var($newProductVariety, FILTER_SANITIZE_STRING, FILTER_FLAG_NO_ENCODE_QUOTES);
	if(empty($newProductVariety) === true) {
		throw(new\InvalidArgumentException("product variety description has exceeded its character limit"));
	}
	if(strlen($newProductVariety) > 128) {
		throw(new\RangeException("product variety description has exceeded its character limit"));
	}
	$this->productVariety = $newProductVariety;
}

/**
 * inserts product into mySQL
 * @param \PDO $pdo PDO connection object
 * @throws \PDOException when mySQL related errors occur
 * @throws \TypeError if $pdo is not a PDO connection object
**/
public function insert(\PDO $pdo): void {
	//create query template
	$query ="INSERT INTO product(productId, productFacts, productHash, productHistory, productName, productPrice, productVariations, productVariety) VALUES(:productId, :productFacts, :productHash, :productHistory, :productName, :productPrice, :productVariations, :productVariety)";
	$statement = $pdo->prepare($query);

	//bind member variables to the place holders
	$parameters = ["productId" => $this->productId->getBytes(), "productFacts" => $this->productFacts>getBytes(),"productHash" => $this->productHash>getBytes(), "productHistory" => $this->productHistory>getBytes(), "productName" => $this->productName>getBytes(), "productPrice" => $this->productPrice>getBytes(), "productVariations" => $this->productVariations>getBytes(), "productVariety" => $this->productVariety>getBytes];
	$statement->($parameters);
}

/**
 *deletes product into mySQL
 *@param \PDO $pdo PDO connection object
 *@throws \PDOException when mySQL related errors occur
 *@throws \TypeError if $pdo is not a PDO connection object
**/
public function delete(\PDO $pdo): void {

	$query = "DELETE FROM product WHERE productId = : productId";
	$statement = $pdo->prepare($query);

	$parameters = ["productId" => $this->productId->getBytes()];
	$statement->execute($parameters);
}

/**
 *updates product from mySQL
 *@param \PDO $pdo PDO connection object
 *@throws \PDOException when mySQL related errors occur
 *@throws \TypeError if $pdo is not a PDO connection object
**/
public function update(\PDO $pdo): void {

	$query = "UPDATE product SET productFacts = :productFacts, productName =:productName WHERE productId = :productId";
	$statement = $pdo->prepare($query);

	$parameters = ["productId" => $this->productId->getBytes(), "productFacts" => $this->productFacts>getBytes(),"productHash" => $this->productHash>getBytes(), "productHistory" => $this->productHistory>getBytes(), "productName" => $this->productName>getBytes(), "productPrice" => $this->productPrice>getBytes(), "productVariations" => $this->productVariations>getBytes(), "productVariety" => $this->productVariety>getBytes];
	$statement->execute($parameters);
}

/**
 * formats the state variables with JSON
 * @return array to serialize state variables
 */
public function jsonSerialize(): array {
	$fields = get_object_vars($this);

	$fields["productId"] = $this->productId->toString();
	return($fields);
}