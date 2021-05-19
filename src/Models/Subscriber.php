<?php


namespace SenderNet\Models;
/**
 *
 * @property int $id
 * @property string $email
 * @property string $firstname
 * @property string $lastname
 * @property string $unsubscribed_at
 * @property string $bounced_at
 * @property string $created
 * @property string $unsubscribed
 * @property string $location
 * @property string $bounced
 * @property string $spam_reported
 * @property Tag[] $tags
 * @property Group[] $groups
 */

class Subscriber extends Base
{
    public $id;
    public $email;
    public $firstname;
    public $lastname;
    public $unsubscribed_at;
    public $bounced_at;
    public $created;
    public $unsubscribed;
    public $location;
    public $bounced;
    public $spam_reported;
    public $tags;
    public $groups;

    public function __construct($data = [])
    {
        parent::__construct($data);
    }

    /**
     * @param mixed $email
     */
    public function setEmail($email): void
    {
        $this->email = $email;
    }

    /**
     * @param mixed $firstname
     */
    public function setFirstname($firstname): void
    {
        $this->firstname = $firstname;
    }

    /**
     * @param mixed $lastname
     */
    public function setLastname($lastname): void
    {
        $this->lastname = $lastname;
    }

    /**
     * @param mixed $tags
     */
    public function setTags($tags): void
    {
        $this->tags = $tags;
    }

    /**
     * @param mixed $groups
     */
    public function setGroups($groups): void
    {
        $this->groups = $groups;
    }


}