<?php
namespace Edu\Cnm\Dconley6\DataDesign;

require_once("Profile.php");

/**
 * A small view of ownership of audio on SoundCloud
 *
 * This will be an example of what SoundCloud stores when you update your profile information
 *
 * @author Dante Conley <danteconley@icloud.com>
 * @version 1.0
 **/
class Profile //implements \JsonSerializable
	//use ValidateDate;
{
	/**
	 * id for this Profile; this is the primary key
	 * @var int $profileId
	 **/
	private $profileId;
	/**
	 * User name of the profile
	 * @var string $profileUser
	 **/
	private $profileUser;
	/**
	 * Location of where the profile user lives
	 * @var string $profileLocation
	 **/
	private $profileLocation;
	/**
	 * Contact information for the profile
	 * @var string $profileContact
	 **/
	private $profileContact;
	/**
	 * Information about the user of the profile
	 * @var string $profileBio
	 **/
	private $profileBio;

	/**
	 * Constructor for the Profile
	 *
	 * @param int|null $newProfileId id of this profile or null if a new Profile
	 * @param string $newProfileUser username of the Profile
	 * @param string $newProfileLocation location of the user of the Profile
	 * @param string $newProfileContact contact information for the user of the Profile
	 * @param string $newProfileBio bio of the user of the Profile
	 * @throws \InvalidArgumentException if data types are not valid
	 * @throws \RangeException if data values are out of bounds
	 * @throws \TypeError if data types violate type hints
	 * @throws \Exception if some other exception occurs
	 **/
	public function _construct(int $newProfileId = null, string $newProfileUser, string $newProfileLocation, string $newProfileContact, string $newProfileBio) {
		try {
			$this->setProfileId($newProfileId);
			$this->setProfileUser($newProfileUser);
			$this->setProfileLocation($newProfileLocation);
			$this->setProfileContact($newProfileContact);
			$this->setProfileBio($newProfileBio);
		} catch(\InvalidArgumentException $invalidArgument) {
			// rethrow the exception to the caller
			throw(new \InvalidArgumentException($invalidArgument->getMessage(), 0, $invalidArgument));
		} catch(\RangeException $range) {
			// rethrow the exception to the caller
			throw(new \RangeException($range->getMessage(), 0, $range));
		} catch(\TypeError $typeError) {
			//rethrow the exception to the caller
			throw(new \TypeError($typeError->getMessage(), 0, $typeError));
		} catch(\Exception $exception) {
			// rethrow the exception to the caller
			throw(new \Exception($exception->getMessage(), 0, $exception));
		}
	}

	/**
	 * accessor method for profile id
	 *
	 * @return int|null value of profile id
	 **/

	public function getProfileId() {
		return ($this->profileId);
	}

	/**
	 * mutator method for profile id
	 *
	 * @param int|null $newProfileId new value of profile id
	 * @throws \RangeException if $newProfileId is not positive
	 * @throws \TypeError if $newProfileId is not an integer
	 **/

	public function setProfileId(int $newProfileId = null) {
		// base case: if the profile id is null, this is a new profile without a mySQL assigned id (yet)
		if($newProfileId === null) {
			$this->profileId = null;
			return;
		}

		// verify the profile id is positive
		if($newProfileId <= 0) {
			throw(new \RangeException("profile id is not positive"));
		}

		// convert and store the profile id
		$this->profileId = $newProfileId;
	}

	/**
	 * accessor method for profile user
	 *
	 * @return string value of profile user
	 **/

	public function getProfileUser() {
		return ($this->profileUser);
	}

	/** mutator method for profile user
	 *
	 * @param string $newProfileUser new value of profile user
	 * @throws \RangeException if $newProfileUser is not positive
	 * @throws \TypeError if $newProfileUser is not a string
	 **/
	public function setProfileUser(string $newProfileUser) {
		// verify the profile user is positive
		if($newProfileUser <= 0) {
			throw(new \RangeException("profile user is not positive"));
		}

		// convert and store the profile user
		$this->profileUser = $newProfileUser;
	}

	/**
	 * accessor method for profile location
	 *
	 * @return string value of profile location
	 **/
	public function getProfileLocation() {
		return($this->profileLocation);
	}

	/**
	 * mutator method for profile location
	 *
	 * @param string $newProfileLocation new value of profile location
	 * @throws \RangeException if $newProfileLocation is not positive
	 * @throws \TypeError if $newProfileLocation is not a string
	 **/
	public function setProfileLocation(string $newProfileLocation) {
		// verify the profile location is positive
		if($newProfileLocation <= 0) {
			throw(new \RangeException("profile location is not positive"));
		}

		// convert and store the profile location
		$this->profileLocation = $newProfileLocation;
	}

	/**
	 * accessor method for profile contact
	 *
	 * @return string value of profile contact
	 **/
	public function getProfileContact() {
		return($this->profileContact);
	}

	/**
	 * mutator method for profile contact
	 *
	 * @param string $newProfileContact new value of profile contact
	 * @throws \RangeException if $newProfileContact is not positive
	 * @throws \TypeError if $newProfileContact is not a string
	 **/
	public function setProfileContact(string $newProfileContact) {
		//verify the profile contact is positive
		if($newProfileContact <= 0) {
			throw(new \RangeException("profile contact is not positive"));
		}

		// convert and store the profile contact
		$this->profileContact = $newProfileContact;
	}

	/**
	 * accessor method for profile bio
	 *
	 * @return string value of profile bio
	 **/
	public function getProfileBio() {
		return($this->profileBio);
	}

	/**
	 * mutator method for profile bio
	 *
	 * @param string $newProfileBio new value of profile bio
	 * @throws \RangeException if $newProfileBio is >= 1000
	 * @throws \TypeError $newProfileBio is not a string
	 **/
	public function setProfileBio(string $newProfileBio) {
		//verify the profile bio is less than or equal too 1000
		if($newProfileBio >=1000) {
			throw(new \RangeException("profile bio is greater than 1000 characters"));
		}

		//convert and store the profile bio
		$this->profileBio = $newProfileBio;
	}

}