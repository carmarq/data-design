<?php
namespace Edu\Cnm\cmarquez69\DataDesign;
use Ramsey\Uuid\Uuid;
/**
 * @author Carlos Marquez <carl.marq95@gmail.com>
 * @version 0.0.1
 **/
/**
 * Trait to validate a uuid
 *
 * This trait will validate a uuid in any of the following three formats:
 *
 * 1. human readable string (36 bytes)
 * 2. binary string (16 bytes)
 * 3. Ramsey\Uuid\Uuid object
 *
 * @author Dylan McDonald <dmcdonald21@cnm.edu>
 * @package Edu\Cnm\Misquote
 **/
trait ValidateUuid {
	/**
	 * validates a uuid irrespective of format
	 *
	 * @param string|Uuid $newUuid uuid to validate
	 * @return Uuid object with validated uuid
	 * @throws \InvalidArgumentException if $newUuid is not a valid uuid
	 * @throws \RangeException if $newUuid is not a valid uuid v4
	 **/
	private static function validateUuid($newUuid) : Uuid {
		// verify a string uuid
		if(gettype($newUuid) === "string") {
			// 16 characters is binary data from mySQL - convert to string and fall to next if block
			if(strlen($newUuid) === 16) {
				$newUuid = bin2hex($newUuid);
				$newUuid = substr($newUuid, 0, 8) . "-" . substr($newUuid, 8, 4) . "-" . substr($newUuid,12, 4) . "-" . substr($newUuid, 16, 4) . "-" . substr($newUuid, 20, 12);
			}
			// 36 characters is a human readable uuid
			if(strlen($newUuid) === 36) {
				if(Uuid::isValid($newUuid) === false) {
					throw(new \InvalidArgumentException("invalid uuid"));
				}
				$uuid = Uuid::fromString($newUuid);
			} else {
				throw(new \InvalidArgumentException("invalid uuid"));
			}
		} else if(gettype($newUuid) === "object" && get_class($newUuid) === "Ramsey\\Uuid\\Uuid") {
			// if the misquote id is already a valid UUID, press on
			$uuid = $newUuid;
		} else {
			// throw out any other trash
			throw(new \InvalidArgumentException("invalid uuid"));
		}
		// verify the uuid is uuid v4
		if($uuid->getVersion() !== 4) {
			throw(new \RangeException("uuid is incorrect version"));
		}
		return($uuid);
	}
}
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
		 *
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
 */
public function getProductId() : Uuid {
		return($this->productId);
}

/**
 * mutator method for product id
 *
 *
 *
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
 * @
 **/
public function setProductFacts(string $newProductFacts) : void {
			$newProductFacts = trim($newProductFacts);
			$newProductFacts = filter_var($newProductFacts, FILTER_SANITIZE_STRING, FILTER_FLAG_NO_ENCODE_QUOTES);
	if(empty($newProductFacts) === true) {
			throw(new \InvalidArgumentException("profile fact is empty or insecure"));
	}
	if(strlen ($newProfileFacts) > 128){
		throw(new\RangeException("fact character limit has been exceeded"));
	}
		$this->profileFacts = $newProductFacts;
}
/**
 * accessor method for product hash
 * @return string value for product hash
 */
public function getProductHash(): string {
		return $this->profileHash;

}
/**
 * mutator method for product hash
 *
 * @throws \InvalidArgumentException if $newProductHash is not a valid object or a string
 * @throws \InvalidArgumentException if $newProductHash is in hexadecimal
 * @throws \RangeException if $newProductHash is more than 128 characters
 */
