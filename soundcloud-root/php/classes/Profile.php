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
		}catch(\Exception $exception) {
			// rethrow the exception to the caller
			throw(new \Exception($exception->getMessage(), 0, $exception));
		}
	}
	/**
}